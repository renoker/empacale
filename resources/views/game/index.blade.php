<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packing Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .game-container {
            width: 100%;
            max-width: 1000px;
            height: 600px;
            position: relative;
            border: 2px solid #000;
            margin: 0 auto;
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
            background: #fff;
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

        .drop-hover {
            border: 4px solid #00f;
            /* Margen adicional */
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
    <div class="container">
        <h1 class="text-center mt-5">Packing Game DESK</h1>
        <div class="text-center mb-3">
            <button class="btn btn-primary" id="startButton" onclick="startGame()" style="display: none;">Start
                Game</button>
            <p id="timer">Time: 0</p>
            <p id="score">Score: 0</p>
            <p id="level">Level: 1</p>
        </div>
        <div class="game-container" id="gameContainer">
            <div class="droppable" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)"
                ondragenter="highlightDropZone(event)" ondragleave="unhighlightDropZone(event)">
                Drop items here
            </div>
        </div>
    </div>

    <script>
        let timerInterval;
        let time = 0;
        let score = 0;
        let level = 1;
        let speedMultiplier = 1;
        let itemsConfig = [];
        const items = [];
        const touchData = {
            item: null,
            offsetX: 0,
            offsetY: 0
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
            speedMultiplier = 1;
            document.getElementById('timer').innerText = `Time: ${time}`;
            document.getElementById('score').innerText = `Score: ${score}`;
            document.getElementById('level').innerText = `Level: ${level}`;
            if (timerInterval) {
                clearInterval(timerInterval);
            }
            timerInterval = setInterval(() => {
                time++;
                document.getElementById('timer').innerText = `Time: ${time}`;
            }, 1000);
            createMovingItems();
        }

        function createMovingItems() {
            const container = document.getElementById('gameContainer');
            itemsConfig.forEach((config, index) => {
                const item = document.createElement('img');
                item.classList.add('draggable');
                item.draggable = true;
                item.ondragstart = drag;
                item.ontouchstart = touchStart;
                item.id = `draggable${index}`;
                item.src = config.src;
                item.dataset.points = config.points;

                let initialX = Math.random() * (container.offsetWidth - 50);
                let initialY = Math.random() * (container.offsetHeight - 50);

                item.style.left = `${initialX}px`;
                item.style.top = `${initialY}px`;

                container.appendChild(item);
                items.push(item);
                moveItem(item, container, speedMultiplier);
            });
        }

        function moveItem(item, container, speedMultiplier) {
            let directionX = Math.random() < 0.5 ? 1 : -1;
            let directionY = Math.random() < 0.5 ? 1 : -1;
            let speedX = (Math.random() * 2 + 2) * speedMultiplier;
            let speedY = (Math.random() * 2 + 2) * speedMultiplier;

            function animate() {
                const rect = item.getBoundingClientRect();
                const containerRect = container.getBoundingClientRect();

                let newLeft = rect.left - containerRect.left + speedX * directionX;
                let newTop = rect.top - containerRect.top + speedY * directionY;

                if (newLeft <= 0) {
                    newLeft = 0;
                    directionX = 1;
                } else if (newLeft + rect.width >= containerRect.width) {
                    newLeft = containerRect.width - rect.width;
                    directionX = -1;
                }
                if (newTop <= 0) {
                    newTop = 0;
                    directionY = 1;
                } else if (newTop + rect.height >= containerRect.height) {
                    newTop = containerRect.height - rect.height;
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
                    score += points;
                    document.getElementById('score').innerText = `Score: ${score}`;
                    if (score > previousScore) {
                        level += 1;
                        speedMultiplier = 1 + (level - 1) * 0.1;
                        document.getElementById('level').innerText = `Level: ${level}`;
                        updateSpeed();

                        // Añadir la animación de sacudida
                        const dropZone = document.getElementById('droppable');
                        dropZone.classList.add('shake');
                        setTimeout(() => {
                            dropZone.classList.remove('shake');
                        }, 500);
                    }
                }
                if (items.length === 0) {
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

            target.ontouchmove = touchMove;
            target.ontouchend = touchEnd;
        }

        function touchMove(event) {
            const touch = event.touches[0];
            const target = touchData.item;
            const container = document.getElementById('gameContainer');
            const rect = container.getBoundingClientRect();
            let newLeft = touch.clientX - rect.left - touchData.offsetX;
            let newTop = touch.clientY - rect.top - touchData.offsetY;

            if (newLeft <= 0) {
                newLeft = 0;
            } else if (newLeft + target.offsetWidth >= container.offsetWidth) {
                newLeft = container.offsetWidth - target.offsetWidth;
            }
            if (newTop <= 0) {
                newTop = 0;
            } else if (newTop + target.offsetHeight >= container.offsetHeight) {
                newTop = container.offsetHeight - target.offsetHeight;
            }

            target.style.left = `${newLeft}px`;
            target.style.top = `${newTop}px`;

            // Highlight drop zone if touching
            const dropZone = document.getElementById('droppable');
            const dropZoneRect = dropZone.getBoundingClientRect();
            if (touch.clientX >= dropZoneRect.left && touch.clientX <= dropZoneRect.right && touch.clientY >= dropZoneRect
                .top && touch.clientY <= dropZoneRect.bottom) {
                dropZone.classList.add('drop-hover');
            } else {
                dropZone.classList.remove('drop-hover');
            }

            event.preventDefault();
        }

        function touchEnd(event) {
            const target = touchData.item;
            target.ontouchmove = null;
            target.ontouchend = null;

            const dropZone = document.getElementById('droppable');
            dropZone.classList.remove('drop-hover'); // Ensure the highlight is removed when touch ends

            const dropTarget = document.elementFromPoint(event.changedTouches[0].clientX, event.changedTouches[0].clientY);
            if (dropTarget && dropTarget.classList.contains('droppable')) {
                drop({
                    target: dropTarget
                });
            }
        }

        function highlightDropZone(event) {
            const dropZone = document.getElementById('droppable');
            dropZone.classList.add('drop-hover');
        }

        function unhighlightDropZone(event) {
            const dropZone = document.getElementById('droppable');
            dropZone.classList.remove('drop-hover');
        }

        function updateSpeed() {
            items.forEach(item => {
                moveItem(item, document.getElementById('gameContainer'), speedMultiplier);
            });
        }

        function saveScore(time, score) {
            fetch('/save-score', {
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
