<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giáo Viên</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    text-align: center;
    padding: 2rem;
}

h1 {
    margin-bottom: 2rem;
}

.button-container {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    max-width: 300px;
    margin: 0 auto;
}

button {
    padding: 1rem;
    font-size: 1rem;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
}

button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <h1>Chào mừng Giáo Viên</h1>
    <div class="button-container">
        <button onclick="window.location.href='DayHoc.php'">Dạy học</button>
        <button onclick="window.location.href='OnTap.php'">Ôn tập</button>
        <button onclick="window.location.href='KiemTra.php'">Kiểm tra</button>
        <button onclick="window.location.href='QuanLiSinhVien.php'">Quản lí sinh viên</button>
    </div>
</body>
</html>
