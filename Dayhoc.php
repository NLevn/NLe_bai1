<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dạy Học</title>
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

        .back-button {
            background-color: #f44336;
        }

        .back-button:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <h1>Trang Dạy Học</h1>
    <div class="button-container">
        <button onclick="window.location.href='KiemTraBaiCu.php'">Kiểm tra bài cũ</button>
        <button onclick="window.location.href='DayHocMain.php'">Dạy học</button>
        <button class="back-button" onclick="window.location.href='GiaoVien.php'">Quay lại</button>
    </div>
</body>
</html>
