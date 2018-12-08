<?php
include("conexion.php")

//Variables de Insertar Datos
$Nombre =$_POST['Nom'];
$Fecha =$_POST['Fech']
  
  $sql = "INSERT INTO Empleado (nombre, feching) VALUES ('$Nombre', '$Fecha')"
  
  $resultado = pg_query($con, $sql)
?>
