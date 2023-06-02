
<?php
    include ("ConexionBD.php");
    $conexion = conexionBaseDatos();
    $id = $_GET["id"];
    $sql = $conexion -> query("select * from estudiante where id = $id");
    while ($datos = $sql -> fetch_object()) { ?>
        <form method= "POST" action = "ActualizarProceso.php">
            ç<input type = "hidden" name = "id" value = "<?= $_GET["id"] ?>"></input>
            <label>NOMBRE</label>
            <input type = "text" name = "nombre" value = "<?= $datos -> nombre?>"></input> <br>
            <label>CI</label>
            <input type = "text" name = "ci" value = "<?= $datos -> ci?>"></input> <br>
            <label>TELEFONO</label>
            <input type = "text" name = "telf" value = "<?= $datos -> telf?>"></input> <br>
            <button type = "submit" name = "btn" value = "okay">Actualizar</button> <br>
        </form>
    <?php }
?>
    
