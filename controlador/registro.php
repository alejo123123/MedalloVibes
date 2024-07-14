<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
$nombre = $_POST["nombre"];
$genero = $_POST["genero"];
$artistanomb = $_POST["artistanomb"];
$fecha = $_POST["fecha"];

if (!empty($nombre) && !empty($genero)  && !empty($artistanomb)  && !empty($fecha)  ) {
    $sql = $conexion->query("INSERT INTO conciertos(nombre,genero,artistanomb,fecha) VALUES('$nombre','$genero','$artistanomb' ,'$fecha')");
    if ($sql==1) {
        echo'<div class="bg-green-400 p-4 text-2xl">Formulario completado correctamente. OK</div>';
    }
} else {
    echo '<div class="bg-red-500 p-4 text-2xl">Por favor, complete todos los campos</div>';
}
            }
?>