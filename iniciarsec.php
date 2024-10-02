<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedalloVibes - Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

<body class="flex items-center justify-center bg-gradient-to-br from-celeste-300 to-blue-900 overflow-hidden">
    <!-- Fondo animado -->
    <div class="animation-bg">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="grad1" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                    <stop offset="0%" stop-color="rgb(255,255,255)" stop-opacity="0" />
                    <stop offset="100%" stop-color="rgb(0,112,255)" stop-opacity="1" />
                </radialGradient>
            </defs>
            <circle cx="50" cy="50" r="50" />
        </svg>
    </div>

    <!-- Contenedor de login -->
    <div class="login-container">
        <div class="bg-white bg-opacity-90 backdrop-blur-md p-12 rounded-lg shadow-2xl text-center w-96 z-10 transform transition-transform hover:shadow-lg">
            <div class="text-blue-700 mb-8 text-2xl font-semibold">INICIAR SESIÓN</div>
            <form method="POST">
                <div class="mb-4">
                    <label for="us_correo" class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
                    <input type="email" id="us_correo" name="us_correo" placeholder="Introduce tu correo" class="block w-full p-4 bg-blue-50 rounded-full border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label for="us_contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                    <input type="password" id="us_contrasena" name="us_contrasena" placeholder="Introduce tu contraseña" class="block w-full p-4 bg-blue-50 rounded-full border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" name="registrar3" value="registrar3" class="w-full py-3 bg-blue-400 text-white rounded-full text-lg font-medium hover:bg-blue-500 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-600">Entrar</button>
                <?php 
                include 'conexion.php';
                include 'controlador/validar.php';
                ?>
            </form>
            <a href="usuarios.php" class="text-blue-500 mt-18 hover:text-blue-700">Registrarse</a>
        </div>
    </div>
</body>

</html>
