<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        if ($user['user_type'] === 'teacher') {
            header("Location: GiaoVien.php");
        } else {
            header("Location: HocVien.php");
        }
    } else {
        echo "<script>alert('Sai mật khẩu'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Email không tồn tại'); window.location.href='index.php';</script>";
}

$stmt->close();
$conn->close();
?>
