<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenida...!!!</title>

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <style>
        /* Estilos de la página */
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('tokito.jpg'); /* Fondo con imagen */
            background-size: cover; /* Hace que la imagen cubra toda la pantalla */
            background-position: center; /* Centra la imagen */
            color: #ffffff; /* Texto blanco */
            text-align: center;
            padding: 5% 0;
            position: relative;
            overflow: hidden;
            height: 100vh;
            margin: 0; /* Elimina el margen por defecto del body */
        }

        h1 {
            font-family: 'Pacifico', cursive;
            font-size: 5rem;
            color: #ffeb3b; /* Color amigable para el texto */
            margin-bottom: 20px;
            z-index: 10;
            position: relative;
            opacity: 0;
        }

        .btn-start {
            background-color: #ffeb3b;
            color: #000;
            font-size: 1.5rem;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 10;
            position: relative;
            opacity: 0;
            transform: scale(1);
            animation: btnAnim 1s ease-in-out forwards; /* Animación para el botón */
        }

        .btn-start:hover {
            background-color: #ffcc00;
        }

        @keyframes btnAnim {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Confetti Styles */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffeb3b; /* Color base */
            border-radius: 50%;
            animation: confetti-fall 3s linear infinite;
        }

        @keyframes confetti-fall {
            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(720deg);
                opacity: 0;
            }
        }

        /* Efectos de animación de explosión de texto */
        @keyframes explode {
            0% {
                transform: scale(1);
                opacity: 0;
            }
            50% {
                transform: scale(1.5);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        /* Estilo para el contenedor del video y el botón */
        .video-container {
            position: fixed;
            bottom: 20px; /* Ajuste de la posición */
            right: 20px; /* Alineado a la derecha */
            z-index: 100;
            text-align: center;
        }

        /* Estilo para el video */
        #video-viejo {
            width: 320px;
            height: auto;
            display: none;
            margin-bottom: 10px;
            border-radius: 10px; /* Bordes redondeados para el video */
        }

        /* Posicionamiento del botón de redirección */
        .btn-start-main {
            position: relative;
            z-index: 10;
        }

        /* Media Queries para hacerlo responsivo */
        @media (max-width: 768px) {
            h1 {
                font-size: 3rem; /* Reducir el tamaño del texto en móviles */
            }

            .btn-start {
                font-size: 1.2rem;
                padding: 10px 20px; /* Ajustar el tamaño del botón en móviles */
            }
        }

    </style>
</head>
<body>

    <h1 id="welcome-text">¡Bienvenida...!!! <span id="name">Vivian</span>!</h1>
    <button class="btn-start btn-start-main" onclick="window.location.href = 'cumpleanos.html';">¡Toca para comenzar!</button>

    <!-- Contenedor para el video y el nuevo botón -->
    <div class="video-container">
        <video id="video-viejo" controls>
            <source src="viejo.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <button class="btn-start" onclick="showVideo();">Viejo Cochino</button>
    </div>

    <script>
        // Crear confeti animado con colores aleatorios
        function createConfetti() {
            var numConfetti = 150; // Cuantos confetis quieres
            var colors = ['#ffeb3b', '#ff4081', '#4caf50', '#2196f3', '#ff5722']; // Colores de confeti
            for (var i = 0; i < numConfetti; i++) {
                var confetti = document.createElement('div');
                confetti.classList.add('confetti');
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)]; // Color aleatorio
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.animationDuration = (Math.random() * 3 + 3) + 's'; // Duración aleatoria
                confetti.style.animationDelay = Math.random() * 2 + 's'; // Retraso aleatorio para que no caigan todos al mismo tiempo
                document.body.appendChild(confetti);
            }
        }

        // Animación de explosión de texto
        function animateText() {
            var textElement = document.getElementById('welcome-text');
            textElement.style.animation = 'explode 1.5s ease-in-out';
            textElement.style.opacity = '1';
        }

        // Función para mostrar el video
        function showVideo() {
            var videoElement = document.getElementById('video-viejo');
            if (videoElement.style.display === 'block') {
                videoElement.style.display = 'none'; // Ocultar el video si ya está visible
            } else {
                videoElement.style.display = 'block'; // Mostrar el video
                videoElement.play(); // Reproducir el video
            }
        }

        window.onload = function() {
            // Iniciar animaciones
            createConfetti();
            animateText();
        }
    </script>

</body>
</html>
