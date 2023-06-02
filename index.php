<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method= "POST" action = "Registrar.php" class = "form">
        <label class = >ID</label>
        <input type = "text" name = "id"></input> <br>
        <label>NOMBRE</label>
        <input type = "text" name = "nombre"></input> <br>
        <label>CI</label>
        <input type = "text" name = "ci"></input> <br>
        <label>TELEFONO</label>
        <input type = "text" name = "telf"></input> <br>
        <button type = "submit" name = "btn" value = "okay">Registrar</button> <br>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CI</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include ("ConexionBD.php");
            $conexion = conexionBaseDatos();
            $consulta = "select * from estudiante";
            $sql = $conexion -> query($consulta);
            while ($datos = $sql -> fetch_object()) { ?>
                <tr>
                    
                    <td><?= $datos -> id?></td>
                    <td><?= $datos -> nombre?></td>
                    <td><?= $datos -> ci?></td>
                    <td><?= $datos -> telf?></td>
                    <td>
                        <a href="ActualizarFormulario.php?id=<?= $datos -> id?>">Modificar</a>
                        <a href="Eliminar.php?id=<?= $datos -> id?>">Eliminar</a>
                    </td>
                    
                </tr>
            <?php }
        ?>    
        </tbody>
    </table>
</body>
</html>