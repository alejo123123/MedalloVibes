<?php

use function PHPSTORM_META\sql_injection_subst;

include 'conexion.php';


if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM conciertos WHERE id_concierto=$id");

    if ($sql==1) {
        echo 'concierto eliminada';
    }else {
        echo 'error';
    }
}

?>