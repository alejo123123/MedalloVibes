<?php 
include 'layouts/header.php';
?>



<body >
    
    <h1 class="text-6xl text-center my-24 font-kalnia">Nuestros Conciertos</h1>
    <div class="grid md:grid-cols-3 grid-cols-1 md:gap-24 gap-8 mx-6"> 

                <?php 

                include 'conexion.php';

               
                $sql = $conexion->query("SELECT nombre, genero, artistanomb, fecha, enlace FROM conciertos");

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
                   <a href="<?= $datos->enlace?>" class="my-6 text-center text-xl text-yellow-400 text-2xl underline">Saber Mas!</a>   
                 </div>
                
                <?php } ?>
            </tbody>
    </div>
</body>
</html>