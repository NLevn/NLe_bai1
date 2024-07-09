<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Cup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .cup {
            cursor: pointer;
            margin-bottom: 20px;
        }
        .input-container {
            margin-bottom: 20px;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .modal {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lucky Cup</h1>
        <div class="cup" onclick="chooseNumber()">
            <img src="https://via.placeholder.com/150" alt="Cup Icon">
            <p>Click me!</p>
        </div>
        <div class="input-container">
            <label for="numberInput">Enter a number:</label>
            <input type="number" id="numberInput" min="1" placeholder="Enter a number...">
        </div>
    </div>
    <button onclick="window.location.href='KiemTraBaiCu.php'">Quay lại</button>
    <div class="overlay" id="overlay">
        <div class="modal">
            <div class="congratulations">Congratulations!</div>
            <div id="modalContent"></div>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>
    <script>
        function chooseNumber() {
            var input = document.getElementById("numberInput");
            var maxNumber = parseInt(input.value);
            
            if (isNaN(maxNumber) || maxNumber <= 0) {
                alert("Please enter a valid positive number.");
                return;
            }
            
            var randomNumber = Math.floor(Math.random() * maxNumber) + 1;
            var modalContent = document.getElementById("modalContent");
            modalContent.innerHTML = `You chose number: <span>${randomNumber}</span>`;
            
            var overlay = document.getElementById("overlay");
            overlay.style.display = "flex";
        }
        
        function closeModal() {
            var overlay = document.getElementById("overlay");
            overlay.style.display = "none";
        }
    </script>
</body>
</html>
