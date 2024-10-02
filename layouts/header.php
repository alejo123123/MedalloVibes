<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedalloVibes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalnia+Glaze:wght@100..700&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/music.png">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        secondary: '#007bff', 
                        fondo: '#B4EEF0',
                        menta: '#E6E6FA',
                        celeste: '#D6F5F5'
                    },
                    fontFamily: {
                        'kalnia': ['"Kalnia Glaze"', 'serif'],
                    },
                },
            },
        };
    </script>
    <style>
        /* Fondo animado */
        .animation-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background: linear-gradient(to right, #3b82f6, #1e3a8a);
            overflow: hidden;
        }

        @keyframes move {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .animation-bg svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150vw;
            height: 150vh;
            animation: move 10s infinite ease-in-out;
            fill: url(#grad1);
            opacity: 0.1;
        }

        /* Efecto flotante */
        .login-container {
            perspective: 1000px;
            transform-style: preserve-3d;
            animation: float 5s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: rotateX(0deg) rotateY(0deg);
            }

            50% {
                transform: rotateX(10deg) rotateY(10deg);
            }
        }

        /* Asegura que no haya scroll innecesario */
        body {
            margin: 0;
            overflow: hidden;
            height: 100vh;
        }
    </style>
    
 </head>