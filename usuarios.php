<?php 
include 'layouts/header.php';
?>


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

    <!-- Contenedor de registro -->
    <div class="bg-white bg-opacity-90 backdrop-blur-md p-12 rounded-lg shadow-2xl text-center w-96 z-10">
        <div class="text-blue-700 mb-8 text-2xl font-semibold">REGISTRAR</div>
        <form method="POST">
            <div class="mb-4">
                <label for="us_nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" id="us_nombre" name="us_nombre" placeholder="Introduce tu nombre" class="block w-full p-4 bg-blue-50 rounded-full border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="us_correo" class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
                <input type="email" id="us_correo" name="us_correo" placeholder="Introduce tu correo" class="block w-full p-4 bg-blue-50 rounded-full border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="us_contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                <input type="password" id="us_contrasena" name="us_contrasena" placeholder="Introduce tu contraseña" class="block w-full p-4 bg-blue-50 rounded-full border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full py-3 bg-blue-400 text-white rounded-full text-lg font-medium hover:bg-blue-500 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-600" name="registrar2" value="registrar2">Registrar</button>
            <a href="iniciarsec.php" class="text-blue-500 mt-4 hover:text-blue-700 underline">Iniciar Sesión</a>

            <?php
            include 'conexion.php';
            include 'controlador/registrarus.php';
            ?>
        </form>
    </div>
</body>

</html>
