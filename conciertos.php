<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <h1 class="text-6xl text-center my-24 ">Nuestros Conciertos</h1>
    <div class="grid md:grid-cols-3 grid-cols-1 md:gap-24 gap-8 mx-6"> 

                <?php 
                // Incluir el archivo de conexión a la base de datos.
                include 'conexion.php';

                // Ejecutar una consulta SQL para seleccionar todos los registros de la tabla 'conciertos'.
                $sql = $conexion->query("SELECT nombre, genero, artistanomb, fecha FROM conciertos");

                // Iterar sobre cada fila del resultado de la consulta.
                while ($datos = $sql->fetch_object()) {
                ?>
                <div class="bg-blue-300 text-center p-6">
                    <div class="text-3xl">
                        <img class="h-auto mb-6" src="img/pexels-wendywei-1190297.jpg" alt="concierto">
                   <td class="my-6 text-center text-2xl" >Nombre: <td class="my-6 text-center text-2xl"><?= $datos->nombre ?></td></td>
                   </div>
                    <p class="my-6 text-center text-2xl">Generos: <td class="my-6 text-center"><?= $datos->genero ?></td></p>
                   <p class="my-6 text-center text-xl">Artistas: <td class="my-6 text-center"><?= $datos->artistanomb ?></td></p>
                   <p class="my-6 text-center text-xl">Fecha: <td class="my-6 text-center"><?= $datos->fecha ?></td></p>  
                 </div>
                
                <?php } ?>
            </tbody>
    </div>
</body>
</html>