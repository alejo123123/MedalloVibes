<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrar3"])) {

$us_correo = $_POST["us_correo"];
$us_contrasena = $_POST["us_contrasena"];

$sql = $conexion->query("SELECT us_correo, us_contrasena FROM usuarios WHERE us_correo = '$us_correo' AND us_contrasena = '$us_contrasena'");

if ($us_correo === "admin@gmail" && $us_contrasena === "admin") {
    header("Location: index.php");
    exit();
} elseif ($sql->num_rows > 0) {

    header("Location: conciertos.php");
    exit();
} else {
  
    echo "<p style='color:red; text-align:center;'>Correo o contraseña incorrectos</p>";
}
}
?>