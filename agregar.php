<?php
include("conexion.php");

//Variables de Insertar Datos
$Nombre =$_POST['Nom'];
$Fecha =$_POST['Fech'];
  
  $sql = "INSERT INTO Empleados (nombre, feching) VALUES ('$Nombre', '$Fecha')";
  
  if(pg_query($db, $sql)){
echo "<script>
alert('Registro nuevo');
    window.location= 'agregar_empleados.php'
</script>";;
}else{
echo "Error: ".$sql."<br>".pg_last_error($db);
}
?>