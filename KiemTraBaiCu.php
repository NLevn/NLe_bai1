<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Bài Cũ</title>
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
    <h1>Trang Kiểm Tra Bài Cũ</h1>
    <div class="button-container">
        <button onclick="window.location.href='ChiecCoc.php'">Chiếc cốc may mắn</button>
        <button onclick="window.location.href='VongQuay.php'">Cuộc đua tử thần</button>
        <button class="back-button" onclick="window.location.href='DayHoc.php'">Quay lại</button>
    </div>
</body>
</html>
