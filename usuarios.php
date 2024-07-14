<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h2 class="text-center text-6xl mt-16">MedalloVibes</h2>

    <div class="bg-blue-300 shadow-md p-8 mx-auto mt-40 h-auto rounded max-w-md w-full">
        <h2 class="text-4xl text-center mb-4">Registrar</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="us_nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="us_nombre" name="us_nombre">
            </div>
            <div class="mb-4">
                <label for="us_correo" class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="us_correo" name="us_correo">
            </div>
            <div class="mb-4">
                <label for="us_contrasena" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="us_contrasena" name="us_contrasena">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 " name="registrar2" value="registrar2">Registrar</button>
            <a class="ml-36 underline" href="iniciarsec.php">Iniciar Seccion</a>

            <?php
            include 'conexion.php';
            include 'controlador/registrarus.php';

            ?>
        </form>
    </div>
</body>

</html>