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
        #uploadSection {
            margin-bottom: 20px;
        }
        iframe {
            width: 100%;
            height: 600px;
            border: 1px solid #ccc;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Trang Dạy Học Chính</h1>
    <div class="button-container">
        <button class="back-button" onclick="window.location.href='DayHoc.php'">Quay lại</button>
    </div>
    <div id="uploadSection">
        <input type="file" id="fileInput">
        <button id="viewButton">View File</button>
    </div>
    <iframe id="fileViewer"></iframe>

    <script>
        document.getElementById('viewButton').addEventListener('click', function() {
            const fileInput = document.getElementById('fileInput');
            const fileViewer = document.getElementById('fileViewer');
            
            if (fileInput.files.length === 0) {
                alert('Please select a file to upload.');
                return;
            }

            const file = fileInput.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                fileViewer.src = e.target.result;
                fileViewer.style.display = 'block';
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>
</html>
