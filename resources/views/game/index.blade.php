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
            /* Asegura que los elementos no se salgan visualmente del contenedor */
        }

        .draggable {
            width: 50px;
            height: 50px;
            position: absolute;
            cursor: pointer;
        }

        .droppable {
            width: 300px;
            height: 300px;
            border: 2px dashed #ccc;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Packing Game</h1>
        <div class="text-center mb-3">
            <button class="btn btn-primary" id="startButton" onclick="startGame()" style="display: none;">Start
                Game</button>
            <p id="timer">Time: 0</p>
            <p id="score">Score: 0</p>
        </div>
        <div class="game-container" id="gameContainer">
            <div class="droppable" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)">
                Drop items here
            </div>
        </div>
    </div>

    <script>
        let timerInterval;
        let time = 0;
        let score = 0;
        let speedMultiplier = 0.5; // Inicializar el multiplicador de velocidad
        let itemsConfig = [];
        const items = [];
        const touchData = {
            item: null,
            offsetX: 0,
            offsetY: 0
        };

        async function preloadData() {
            try {
                const response = await fetch('/images'); // Ajusta la URL según tu ruta
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
            speedMultiplier = 0.5; // Reiniciar el multiplicador de velocidad al iniciar el juego
            document.getElementById('timer').innerText = `Time: ${time}`;
            document.getElementById('score').innerText = `Score: ${score}`;
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
                item.id = `draggable${index}`; // Asignar un ID único
                item.src = config.src;
                item.dataset.points = config.points; // Guardar los puntos que otorga
                item.style.left = `${Math.random() * (container.offsetWidth - 50)}px`;
                item.style.top = `${Math.random() * (container.offsetHeight - 50)}px`;
                container.appendChild(item);
                items.push(item);
                moveItem(item, container, speedMultiplier); // Inicializar la velocidad de los elementos
            });
        }

        function moveItem(item, container, speedMultiplier) {
            let directionX = Math.random() < 0.5 ? 1 : -1;
            let directionY = Math.random() < 0.5 ? 1 : -1;
            let speedX = (Math.random() * 1 + 1) * speedMultiplier; // Reducir la velocidad base
            let speedY = (Math.random() * 1 + 1) * speedMultiplier; // Reducir la velocidad base

            function animate() {
                const rect = item.getBoundingClientRect();
                const containerRect = container.getBoundingClientRect();

                // Calcula las nuevas posiciones
                let newLeft = rect.left - containerRect.left + speedX * directionX;
                let newTop = rect.top - containerRect.top + speedY * directionY;

                // Verifica los límites del contenedor
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
            if (typeof event.preventDefault === 'function') {
                event.preventDefault();
            }

            const data = event.dataTransfer ? event.dataTransfer.getData("text") : touchData.item.id;
            const draggedElement = document.getElementById(data);
            if (draggedElement && event.target.classList.contains('droppable')) {
                event.target.appendChild(draggedElement);
                items.splice(items.indexOf(draggedElement), 1);
                const points = parseInt(draggedElement.dataset.points, 10);
                if (!isNaN(points) && points > 0) {
                    score += points;
                    document.getElementById('score').innerText = `Score: ${score}`;
                    speedMultiplier += 0.1; // Incrementar el multiplicador de velocidad en 0.1
                    updateSpeed(); // Actualizar la velocidad de todos los elementos
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

            // Verifica los límites del contenedor
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
            event.preventDefault();
        }

        function touchEnd(event) {
            const target = touchData.item;
            target.ontouchmove = null;
            target.ontouchend = null;

            const dropZone = document.elementFromPoint(event.changedTouches[0].clientX, event.changedTouches[0].clientY);
            if (dropZone && dropZone.classList.contains('droppable')) {
                drop({
                    target: dropZone
                });
            }
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

        // Preload data and images on window load
        window.onload = preloadData;
    </script>
</body>

</html>
