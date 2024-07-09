<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning_platform";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$user_type = $_POST['user-type'];
$workplace = isset($_POST['workplace']) ? $_POST['workplace'] : null;

$sql = "INSERT INTO users (email, password, user_type, workplace) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $email, $password, $user_type, $workplace);

if ($stmt->execute()) {
    echo "<script>alert('Đăng ký thành công'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
