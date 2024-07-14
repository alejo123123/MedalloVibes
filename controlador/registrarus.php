<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar2"])) {
$us_nombre = $_POST["us_nombre"];
$us_correo = $_POST["us_correo"];
$us_contrasena = $_POST["us_contrasena"];

if (!empty($us_nombre) && !empty($us_correo)  && !empty($us_contrasena) ) {
    $sql = $conexion->query("INSERT INTO usuarios(us_nombre,us_correo,us_contrasena) VALUES('$us_nombre','$us_correo','$us_contrasena')");
    if ($sql==1) {
        echo'<div class="bg-green-400 p-2 text-2xl">Formulario completado correctamente</div>';
            header("location:index.php");
    }
} else {
    echo '<div class="bg-red-500 p-2 text-2xl">Por favor, complete todos los campos</div>';
}
            }
?>