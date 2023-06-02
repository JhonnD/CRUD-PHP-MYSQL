<?php
    include ("ConexionBD.php");
    $conexion = conexionBaseDatos();
    
    if (!empty($_POST["btn"])) {
        if (!empty($_POST["nombre"]) && !empty($_POST["ci"]) && !empty($_POST["telf"])) {
            $identificador = $_POST["id"];
            $nombre = $_POST["nombre"];
            $ci = $_POST["ci"];
            $telf = $_POST["telf"];
            $sql = $conexion -> query("update estudiante set nombre = '$nombre', ci = '$ci', telf = '$telf' where id = $identificador");
            header("Location: index.php");
            die();
        }
        else {
            echo "UN CAMPO ESTA VACIO";
        }
    } 
    
?>