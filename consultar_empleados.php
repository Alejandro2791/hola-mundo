<?php
include("conexion.php");

$sql = "SELECT*FROM Empleados";

$resultado = $db -> query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Aplicacion - Hola Mundo</title>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">

</head>
<body id="body">
    <h1 id="titulo">Aplicacion</h1>
    <hr color="blue" size=3 />
    <h3 id="titulo">Consultar Empleado</h3>
    <hr color="blue" size=3 />
    
    <table width="70%" border="1px" align="center">
        <tr align="center">
        <td>Codigo</td>
        <td>Nombre</td>
        <td>Fecha Ingreso</td>
    </tr>
    <?php
            while($datos=$resultado->fetch_array()){
    ?>
                <tr>
                <td><?php echo $datos["idTrab"]?></td>
                <td><?php echo $datos["nombre"]?></td>
                <td><?php echo $datos["feching"]?></td>
            </tr>

    <?php   
        }
     ?>
    </table>

</body>
</html>