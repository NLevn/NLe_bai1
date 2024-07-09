<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animal Race</title>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    .race-track {
        position: relative;
        width: 80%;
        max-width: 800px;
        height: 400px;
        background-color: #fff;
        border: 2px solid #000;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .animal {
        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        color: #fff;
        text-align: center;
        background-color: #000;
    }

    .input-container {
        margin-bottom: 20px;
    }

    .input-container input {
        margin: 5px;
        padding: 5px;
        font-size: 14px;
    }

    button {
        padding: 10px 20px;
        font-size: 18px;
        margin-top: 10px;
    }

    .winner-message {
        display: none;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border: 2px solid #000;
        border-radius: 10px;
        text-align: center;
    }
</style>
</head>
<body>
<div class="input-container">
    <input type="number" id="animal-count" placeholder="Số lượng con vật">
    <button id="set-animal-count-btn">Xác nhận</button>
</div>

<div id="name-input-container" class="input-container" style="display: none;"></div>

<div class="race-track" id="race-track"></div>

<button id="start-race-btn" style="display: none;">Start Race</button>

<div class="winner-message" id="winner-message">
    <h2 id="winner-name"></h2>
    <button id="close-winner-btn">Close</button>
</div>
<button onclick="window.location.href='KiemTraBaiCu.php'">Quay lại</button>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const setAnimalCountBtn = document.getElementById('set-animal-count-btn');
        const startRaceBtn = document.getElementById('start-race-btn');
        const raceTrack = document.getElementById('race-track');
        const winnerMessage = document.getElementById('winner-message');
        const winnerName = document.getElementById('winner-name');
        const closeWinnerBtn = document.getElementById('close-winner-btn');
        const nameInputContainer = document.getElementById('name-input-container');
        let animals = [];
        let raceInterval;
        const raceTrackWidth = raceTrack.clientWidth;

        function getRandomDistance() {
            return Math.floor(Math.random() * 10) + 1; // Random distance between 1 and 10
        }

        function resetRace() {
            animals.forEach(animal => {
                animal.element.style.left = '0';
            });
            winnerMessage.style.display = 'none';
        }

        function startRace() {
            resetRace();

            raceInterval = setInterval(() => {
                let raceFinished = false;
                animals.forEach(animal => {
                    const currentLeft = parseInt(animal.element.style.left || 0);
                    const newLeft = Math.min(currentLeft + getRandomDistance(), raceTrackWidth - animal.element.clientWidth);
                    animal.element.style.left = `${newLeft}px`;
                    if (!raceFinished && newLeft >= raceTrackWidth - animal.element.clientWidth) {
                        raceFinished = true;
                        clearInterval(raceInterval);
                        declareWinner(animal);
                    }
                });
            }, 100);
        }

        function declareWinner(winningAnimal) {
            winnerName.textContent = `Chúc mừng ${winningAnimal.name} đã thắng cuộc!`;
            winnerMessage.style.display = 'block';
        }

        setAnimalCountBtn.addEventListener('click', () => {
            const animalCount = parseInt(document.getElementById('animal-count').value);
            if (isNaN(animalCount) || animalCount <= 0) {
                alert('Vui lòng nhập một số hợp lệ cho số lượng con vật.');
                return;
            }
            
            // Clear previous inputs and animals
            nameInputContainer.innerHTML = '';
            raceTrack.innerHTML = '';
            animals = [];

            for (let i = 0; i < animalCount; i++) {
                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = `Tên con vật ${i + 1}`;
                input.id = `animal-name-${i}`;
                nameInputContainer.appendChild(input);

                const animalDiv = document.createElement('div');
                animalDiv.classList.add('animal');
                animalDiv.style.top = `${i * 50 + 20}px`; // Adjusted spacing
                animalDiv.style.backgroundColor = getRandomColor();
                raceTrack.appendChild(animalDiv);

                animals.push({
                    element: animalDiv,
                    nameInputId: `animal-name-${i}`
                });
            }

            nameInputContainer.style.display = 'block';
            startRaceBtn.style.display = 'block';
        });

        startRaceBtn.addEventListener('click', () => {
            animals.forEach(animal => {
                const nameInput = document.getElementById(animal.nameInputId);
                animal.name = nameInput.value || `Animal ${animal.nameInputId.split('-').pop()}`;
                animal.element.textContent = animal.name;
                nameInput.disabled = true; // Disable input after race starts
            });
            startRace();
        });

        closeWinnerBtn.addEventListener('click', () => {
            winnerMessage.style.display = 'none';
        });

        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>
</body>
</html>
