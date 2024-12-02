<?php
$nombre = "Vivian"; // Nombre del cumpleañero
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Feliz Cumpleaños!</title>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Video de fondo */
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            pointer-events: none;
        }

        h1 {
            font-family: 'Pacifico', cursive;
            color: #fff;
            text-align: center;
            font-size: 4rem;
            margin-top: 20vh;
            display: none;
        }

        .mensaje-bonito {
            font-family: 'Roboto', sans-serif;
            color: #fff;
            font-size: 2rem;
            text-align: center;
            margin-top: 10vh;
            display: none;
            animation: fadeOutIn 3s ease-in-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para mejorar visibilidad */
            -webkit-text-stroke: 1px rgba(0, 0, 0, 0.5); /* Contorno */
        }

        @keyframes fadeOutIn {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Estilos para confeti */
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

        /* Responsividad del video */
        @media (max-width: 768px) {
            #background-video {
                height: auto;
                width: 100%;
                min-height: 100%;
            }
        }

        /* Animación de confeti */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffeb3b;
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

    </style>
</head>
<body>

    <video id="background-video" autoplay loop>
        <source src="video.mp4" type="video/mp4">
        <source src="video.webm" type="video/webm">
        <source src="video.ogg" type="video/ogg">
        Tu navegador no soporta el formato de video.
    </video>

    <audio id="audio" loop autoplay>
        <source src="kny.mp3" type="audio/mp3">
        Tu navegador no soporta el audio.
    </audio>

    <h1 id="birthday-message">¡Feliz cumpleaños, <?php echo $nombre; ?>!</h1>
    <div id="mensaje1" class="mensaje-bonito">¡Que esta semana sea muy Especial para tu..!</div>
    <div id="mensaje2" class="mensaje-bonito">Te mereces un año lleno de bendiciones, felicidad y muchos EXITOS...!</div>
    <div id="mensaje3" class="mensaje-bonito">Que todos tus sueños se hagan realidad, Querida Amiga.!</div>
    <div id="mensaje4" class="mensaje-bonito">¡Eres una persona muy linda, inteLigente e increíble, no cambies jamas!</div>
    <div id="mensaje5" class="mensaje-bonito">Que este nuevo año de vida te traiga mucha alegría y se cumplan todas tus metas.</div>
    <div id="mensaje6" class="mensaje-bonito">¡A disfrutar de esta semana especial, mi querida Vieja cochina. :D!</div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

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

        window.onload = function() {
            var audio = document.getElementById("audio");
            var video = document.getElementById("background-video");
            
            video.play();
            audio.play();

            // Llamamos a la función de confeti
            createConfetti();

            setTimeout(function() {
                document.getElementById("birthday-message").style.display = "block";
            }, 3000);

            setTimeout(function() {
                document.getElementById("mensaje1").style.display = "block";
            }, 5000);

            setTimeout(function() {
                document.getElementById("mensaje1").style.display = "none";
                document.getElementById("mensaje2").style.display = "block";
            }, 15000); // Aumentado el tiempo

            setTimeout(function() {
                document.getElementById("mensaje2").style.display = "none";
                document.getElementById("mensaje3").style.display = "block";
            }, 30000); // Aumentado el tiempo

            setTimeout(function() {
                document.getElementById("mensaje3").style.display = "none";
                document.getElementById("mensaje4").style.display = "block";
            }, 45000); // Aumentado el tiempo

            setTimeout(function() {
                document.getElementById("mensaje4").style.display = "none";
                document.getElementById("mensaje5").style.display = "block";
            }, 60000); // Aumentado el tiempo

            setTimeout(function() {
                document.getElementById("mensaje5").style.display = "none";
                document.getElementById("mensaje6").style.display = "block";
            }, 75000); // Aumentado el tiempo
        }
    </script>
</body>
</html>
