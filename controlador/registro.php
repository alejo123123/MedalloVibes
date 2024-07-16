<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar"])) {
$nombre = $_POST["nombre"];
$genero = $_POST["genero"];
$artistanomb = $_POST["artistanomb"];
$fecha = $_POST["fecha"];
$enlace = $_POST["enlace"];

if (!empty($nombre) && !empty($genero)  && !empty($artistanomb)  && !empty($fecha) && !empty($enlace)  ) {
    $sql = $conexion->query("INSERT INTO conciertos(nombre,genero,artistanomb,fecha,enlace) VALUES('$nombre','$genero','$artistanomb' ,'$fecha','$enlace')");
    if ($sql==1) {
        echo'<div class="bg-green-400 p-2 text-2xl mt-2" >Formulario completado correctamente.</div>';
    }
} else {
    echo '<div class="bg-red-500 p-2 mt-2 text-2xl">Por favor, complete todos los campos</div>';
}
            }
?>