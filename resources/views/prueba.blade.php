<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maruchan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('../../assets/images/game/sem1/playamaruchan.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100vw;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .draggable {
            width: 50px;
            height: 50px;
            position: absolute;
            cursor: pointer;
        }

        .droppable {
            width: 140px;
            height: 100px;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-image: url('../../assets/images/game/sem1/maleta.png');
            background-size: 100% 100%;
            background-position: center;
            transition: border 0.3s;
        }

        @keyframes shake {
            0% {
                transform: translateX(-50%) translateY(0);
            }

            25% {
                transform: translateX(-50%) translateY(-10px);
            }

            50% {
                transform: translateX(-50%) translateY(10px);
            }

            75% {
                transform: translateX(-50%) translateY(-10px);
            }

            100% {
                transform: translateX(-50%) translateY(0);
            }
        }

        .shake {
            animation: shake 0.5s;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center mb-3 d-flex justify-content-between">
            <input type="hidden" id="partida">
            <button class="btn btn-primary" id="startButton" onclick="startGame()">Iniciar</button>
            <p id="timer">Time: 00:00</p>
            <p id="score">Score: 0</p>
            <p id="lives">Lives: 3</p> <!-- Added lives display -->
        </div>
        <div class="droppable" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>

    <script>
        let timerInterval;
        let time = 0;
        let score = 0;
        let level = 1;
        let lives = 3; // Initialize lives
        let speedMultiplier = 0.1; // Initial speed multiplier set to 0.1
        let itemsConfig = [];
        const items = [];
        const itemsWithPoints = [];
        const touchData = {
            item: null,
            offsetX: 0,
            offsetY: 0,
            isDragging: false
        };
        let hits = 0; // Initialize hits

        async function preloadData() {
            try {
                const response = await fetch('/images');
                itemsConfig = await response.json();
                preloadImages();
            } catch (error) {
                console.error('Error loading data:', error);
            }
        }

        function preloadImages() {
            let loadedImages = 0;
            itemsConfig.forEach((config, index) => {
                const img = new Image();
                img.src = config.src;
                img.onload = () => {
                    loadedImages++;
                    if (loadedImages === itemsConfig.length) {
                        document.getElementById('startButton').style.display = 'block';
                    }
                };
            });
        }

        function startGame() {
            saveStart()
            document.getElementById('startButton').removeEventListener('click', startGame);
            document.getElementById('startButton').style.display = 'none';

            time = 0;
            score = 0;
            level = 1;
            lives = 3; // Reset lives at the start of the game
            hits = 0; // Reset hits at the start of the game
            speedMultiplier = 0.1; // Reset speed multiplier at the start of the game
            document.getElementById('timer').innerText = `Time: ${formatTime(time)}`;
            document.getElementById('score').innerText = `Score: ${score}`;
            document.getElementById('lives').innerText = `Lives: ${lives}`; // Display lives
            if (timerInterval) {
                clearInterval(timerInterval);
            }
            timerInterval = setInterval(() => {
                time += 10; // Increment by 10 milliseconds
                document.getElementById('timer').innerText = `Time: ${formatTime(time)}`;
            }, 10);
            createMovingItems();
        }

        function formatTime(milliseconds) {
            const mins = Math.floor((milliseconds % 3600000) / 60000);
            const secs = Math.floor((milliseconds % 60000) / 1000);
            return `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
        }

        function createMovingItems() {
            itemsConfig.forEach((config, index) => {
                const item = document.createElement('img');
                item.classList.add('draggable');
                item.draggable = true;
                item.ondragstart = drag;
                item.ontouchstart = touchStart;
                item.id = `draggable${index}`;
                item.src = config.src;
                item.dataset.points = config.points;

                let initialX = Math.random() * (window.innerWidth - 50);
                let initialY = Math.random() * (window.innerHeight - 50);

                item.style.left = `${initialX}px`;
                item.style.top = `${initialY}px`;

                document.body.appendChild(item);
                items.push(item);

                if (config.points > 0) {
                    itemsWithPoints.push(item);
                }

                moveItem(item, speedMultiplier);
            });
        }

        function moveItem(item, speedMultiplier) {
            let directionX = Math.random() < 0.5 ? 1 : -1;
            let directionY = Math.random() < 0.5 ? 1 : -1;
            let speedX = (Math.random() * 2 + 2) * speedMultiplier;
            let speedY = (Math.random() * 2 + 2) * speedMultiplier;

            function animate() {
                if (touchData.isDragging && touchData.item === item) {
                    // Stop movement if the item is being dragged
                    return;
                }

                const rect = item.getBoundingClientRect();

                let newLeft = rect.left + speedX * directionX;
                let newTop = rect.top + speedY * directionY;

                if (newLeft <= 0) {
                    newLeft = 0;
                    directionX = 1;
                } else if (newLeft + rect.width >= window.innerWidth) {
                    newLeft = window.innerWidth - rect.width;
                    directionX = -1;
                }
                if (newTop <= 0) {
                    newTop = 0;
                    directionY = 1;
                } else if (newTop + rect.height >= window.innerHeight) {
                    newTop = window.innerHeight - rect.height;
                    directionY = -1;
                }

                item.style.left = `${newLeft}px`;
                item.style.top = `${newTop}px`;

                if (item.parentNode) {
                    requestAnimationFrame(animate);
                }
            }

            requestAnimationFrame(animate);
        }

        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
        }

        function drop(event) {
            if (event.preventDefault) {
                event.preventDefault();
            }

            const data = event.dataTransfer ? event.dataTransfer.getData("text") : touchData.item.id;
            const draggedElement = document.getElementById(data);
            if (draggedElement && event.target.classList.contains('droppable')) {
                event.target.appendChild(draggedElement);
                items.splice(items.indexOf(draggedElement), 1);
                const points = parseInt(draggedElement.dataset.points, 10);
                if (!isNaN(points)) {
                    const previousScore = score;
                    if (points > 0) {
                        score += points;
                        hits++; // Increment hits
                    } else {
                        score -= 5; // Deduct 5 points if the item has 0 points
                        lives--; // Deduct a life
                        document.getElementById('lives').innerText = `Lives: ${lives}`; // Update lives display
                    }
                    document.getElementById('score').innerText = `Score: ${score}`;
                    if (hits % 4 === 0) { // Every four hits, increase the speed multiplier
                        speedMultiplier += 0.1;
                        updateSpeed();
                    }
                    if (score > previousScore) {
                        level += 1;

                        // Añadir la animación de sacudida
                        const dropZone = document.getElementById('droppable');
                        dropZone.classList.add('shake');
                        setTimeout(() => {
                            dropZone.classList.remove('shake');
                        }, 500);
                    }
                }
                if (lives === 0) { // Check if lives are exhausted
                    clearInterval(timerInterval);
                    alert(`Game over! Your score is ${score}.`);
                    saveScore(formatTime(time), score); // Save score when lives are exhausted
                    return; // Stop further execution if the game is over
                }
                if (itemsWithPoints.length > 0 && itemsWithPoints.every(item => !item.parentNode || item.parentNode
                        .classList.contains('droppable'))) {
                    clearInterval(timerInterval);
                    alert(`You have packed all items with points! Your score is ${score}.`);
                    saveScore(formatTime(time), score);
                }
            }
        }

        function touchStart(event) {
            const touch = event.touches[0];
            const target = touch.target;
            touchData.item = target;
            touchData.offsetX = touch.clientX - target.getBoundingClientRect().left;
            touchData.offsetY = touch.clientY - target.getBoundingClientRect().top;
            touchData.isDragging = true;

            target.ontouchmove = touchMove;
            target.ontouchend = touchEnd;
        }

        function touchMove(event) {
            if (!touchData.isDragging) return;

            const touch = event.touches[0];
            const target = touchData.item;
            let newLeft = touch.clientX - touchData.offsetX;
            let newTop = touch.clientY - touchData.offsetY;

            if (newLeft <= 0) {
                newLeft = 0;
            } else if (newLeft + target.offsetWidth >= window.innerWidth) {
                newLeft = window.innerWidth - target.offsetWidth;
            }
            if (newTop <= 0) {
                newTop = 0;
            } else if (newTop + target.offsetHeight >= window.innerHeight) {
                newTop = window.innerHeight - target.offsetHeight;
            }

            target.style.left = `${newLeft}px`;
            target.style.top = `${newTop}px`;

            event.preventDefault();
        }

        function touchEnd(event) {
            const target = touchData.item;
            target.ontouchmove = null;
            target.ontouchend = null;
            touchData.isDragging = false;

            const dropZone = document.getElementById('droppable');

            // Check if the touch end position is within the drop zone
            const touch = event.changedTouches[0];
            const dropZoneRect = dropZone.getBoundingClientRect();
            if (
                touch.clientX >= dropZoneRect.left &&
                touch.clientX <= dropZoneRect.right &&
                touch.clientY >= dropZoneRect.top &&
                touch.clientY <= dropZoneRect.bottom
            ) {
                event.preventDefault(); // Prevent default action on drop
                drop({
                    target: dropZone
                });
            } else {
                // Resume movement if touch ends outside the drop zone
                moveItem(target, speedMultiplier);
            }
        }

        function updateSpeed() {
            items.forEach(item => {
                moveItem(item, speedMultiplier);
            });
        }

        function saveStart() {
            fetch('/start', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        score: 0
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function saveScore(time, score) {
            fetch('/end', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        score: score
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        window.onload = preloadData;
    </script>
</body>

</html>
