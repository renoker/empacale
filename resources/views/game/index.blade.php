<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packing Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('../../assets/images/game/sem1/playamaruchan.png');
            /* Reemplaza con la ruta a tu imagen */
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
            /* Reemplaza con la ruta a tu imagen */
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
    <div class="container">
        <h1 class="text-center mt-5">Packing Game DESK</h1>
        <div class="text-center mb-3">
            <button class="btn btn-primary" id="startButton" onclick="startGame()" style="display: none;">Start
                Game</button>
            <p id="timer">Time: 00:00:00</p>
            <p id="score">Score: 0</p>
            <p id="level">Level: 1</p>
            <p id="lives">Lives: 3</p> <!-- Display lives -->
        </div>
        <div class="droppable" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)">
            Drop items here
        </div>
    </div>

    <script>
        let timerInterval;
        let time = 0;
        let score = 0;
        let level = 1;
        let speedMultiplier = 0.1; // Initial speed multiplier set to 0.1
        let lives = 3; // Initialize lives
        let itemsConfig = [];
        const items = [];
        const touchData = {
            item: null,
            offsetX: 0,
            offsetY: 0,
            isDragging: false
        };

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
            time = 0;
            score = 0;
            level = 1;
            speedMultiplier = 0.1; // Reset speed multiplier at the start of the game
            lives = 3; // Reset lives at the start of the game
            document.getElementById('timer').innerText = `Time: ${formatTime(time)}`;
            document.getElementById('score').innerText = `Score: ${score}`;
            document.getElementById('level').innerText = `Level: ${level}`;
            document.getElementById('lives').innerText = `Lives: ${lives}`;
            if (timerInterval) {
                clearInterval(timerInterval);
            }
            timerInterval = setInterval(() => {
                time++;
                document.getElementById('timer').innerText = `Time: ${formatTime(time)}`;
            }, 1000);
            createMovingItems();
        }

        function formatTime(seconds) {
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return `${String(hrs).padStart(2, '0')}:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
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
                    if (points === 0) {
                        lives--;
                        document.getElementById('lives').innerText = `Lives: ${lives}`;
                        if (lives === 0) {
                            clearInterval(timerInterval);
                            alert(`Game over! Your score is ${score}.`);
                            return; // Stop further execution if the game is over
                        }
                    } else {
                        const previousScore = score;
                        score += points;
                        document.getElementById('score').innerText = `Score: ${score}`;
                        if (score > previousScore) {
                            level += 1;
                            document.getElementById('level').innerText = `Level: ${level}`;
                            speedMultiplier += 0.1; // Increase speed multiplier by 0.1
                            updateSpeed();

                            // Añadir la animación de sacudida
                            const dropZone = document.getElementById('droppable');
                            dropZone.classList.add('shake');
                            setTimeout(() => {
                                dropZone.classList.remove('shake');
                            }, 500);
                        }
                    }
                }
                if (items.length === 0 && lives > 0) {
                    clearInterval(timerInterval);
                    alert(`You have packed all items! Your score is ${score}.`);
                    saveScore(time, score);
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

        function saveScore(time, score) {
            fetch('/save_score', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        time: time,
                        score: score
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        window.onload = preloadData;
    </script>
</body>

</html>
