<?php 
if (!empty($_POST["registrar"])) {
    $nombre = $_POST["nombre"];
    $id = $_POST["id"];
    $genero = $_POST["genero"];
    $artistanomb = $_POST["artistanomb"];
    $fecha = $_POST["fecha"];
    $enlace = $_POST["enlace"];
    
    


    if (!empty($nombre) && !empty($genero)  && !empty($artistanomb) && !empty($fecha) && !empty($enlace)) {
      
        $sql = $conexion->query("UPDATE conciertos SET nombre='$nombre', genero='$genero', artistanomb='$artistanomb', fecha='$fecha', enlace='$enlace'  WHERE id_concierto=$id");

        if ($sql==1) {
            header("location:index.php");
        } else {
            echo 'error';
        }
    } else {
        echo 'Hay campos vacíos.';
    }
}
?>
