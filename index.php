<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crudsito</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-6xl text-center mt-12 ">MedalloVibes</h1>
<div class="grid md:grid-cols-2 gap-4 mt-24 mx-6 grid-cols-1">
<script>
    function eliminar() {
        var respuesta = confirm('¿Estás seguro?')
        return respuesta
    }
</script>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
        <h3 class="text-xl font-bold mb-4">Registro de conciertos</h3>
        <?php
        include 'controlador/delete.php';
        ?>
       
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre">
        </div>
        <div class="mb-4">
            <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Género</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="genero" name="genero">
        </div>
        <div class="mb-4">
            <label for="artistanomb" class="block text-gray-700 text-sm font-bold mb-2">Artista</label>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="artistanomb" name="artistanomb">
        </div>
        <div class="mb-4">
            <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="registrar" value="registrar">Registrar</button>

        <?php 
        include 'conexion.php';
        include 'controlador/registro.php'
        ?>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-blue-200">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200">ID</th>
                    <th class="py-2 px-4 border-b border-gray-200">Nombre</th>
                    <th class="py-2 px-4 border-b border-gray-200">Género</th>
                    <th class="py-2 px-4 border-b border-gray-200">Artista</th>
                    <th class="py-2 px-4 border-b border-gray-200">fecha</th>
                    <th class="py-2 px-4 border-b border-gray-200">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Incluir el archivo de conexión a la base de datos.
                include 'conexion.php';

                // Ejecutar una consulta SQL para seleccionar todos los registros de la tabla 'conciertos'.
                $sql = $conexion->query("SELECT id_concierto, nombre, genero, artistanomb, fecha FROM conciertos");

                // Iterar sobre cada fila del resultado de la consulta.
                while ($datos = $sql->fetch_object()) {
                ?>
                   <tr class="text-center">
                    <td class="py-2 px-4 border-b border-gray-200"><?= $datos->id_concierto ?></td>
                    <td class="py-2 px-4 border-b border-gray-200"><?= $datos->nombre ?></td>
                    <td class="py-2 px-4 border-b border-gray-200"><?= $datos->genero ?></td>
                    <td class="py-2 px-4 border-b border-gray-200"><?= $datos->artistanomb ?></td>
                    <td class="py-2 px-4 border-b border-gray-200"><?= $datos->fecha ?></td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a class="inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded" href="modificar.php?id=<?=$datos->id_concierto?>"><i class="fas fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" href="index.php?id=<?=$datos->id_concierto?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<a class="text-blue-500 underline text-xl ml-6" href="conciertos.php">Resvisar Conciertos?</a>

   


<script src="https://kit.fontawesome.com/cb0924e7db.js" crossorigin="anonymous"></script>
</body>
</html>
