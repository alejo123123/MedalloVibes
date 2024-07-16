<?php 
include 'conexion.php';

$id = $_GET["id"];

$sql = $conexion->query("SELECT nombre, genero, artistanomb, fecha, enlace FROM conciertos WHERE id_concierto=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
    <form class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mt-24 " method="POST">
        <h3 class="text-xl font-bold mb-4">Modificar Concierto</h3>
        <input type="hidden" name="id" value="<?= htmlspecialchars($_GET["id"]) ?>">
        <?php 
        include 'controlador/actualizar.php';
        ?>

        <?php while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" value="<?= htmlspecialchars($datos->nombre) ?>">
            </div>
            <div class="mb-4">
                <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Género</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="genero" name="genero" value="<?= htmlspecialchars($datos->genero) ?>">
            </div>
            <div class="mb-4">
                <label for="artistanomb" class="block text-gray-700 text-sm font-bold mb-2">Artista</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="artistanomb" name="artistanomb" value="<?= htmlspecialchars($datos->artistanomb) ?>">
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Fecha</label>
                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha" name="fecha" value="<?= htmlspecialchars($datos->fecha) ?>">
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-gray-700 text-sm font-bold mb-2">Enlace</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="enlace" name="enlace" value="<?= htmlspecialchars($datos->enlace) ?>">
            </div>
        <?php } ?>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="registrar" value="registrar">Actualizar</button>
    </form>
</body>
</html>
