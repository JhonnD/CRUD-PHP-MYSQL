<?php
    include ("ConexionBD.php");
    $conexion = conexionBaseDatos();
    $id = $_GET["id"];
    $sql = $conexion -> query("delete from estudiante where id = $id");
    header("Location: index.php");
    die();
?>