<?php
    include ("ConexionBD.php");
    $conexion = conexionBaseDatos();
    if (!empty($_POST["btn"])) {
        
        if (!empty($_POST["id"]) && !empty($_POST["nombre"]) && !empty($_POST["ci"]) && !empty($_POST["telf"])) {
            
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $ci = $_POST["ci"];
            $telf = $_POST["telf"];
            $sql = $conexion -> query("insert into estudiante (id, nombre, ci, telf) values ('$id','$nombre','$ci','$telf')");
            
        }
        else {
            echo "UN CAMPO ESTA VACIO";
        }
    } 
    header("Location: index.php");
    die();
?>