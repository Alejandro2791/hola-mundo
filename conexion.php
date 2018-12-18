<?php
$Password = getenv('db_password');
$Host = getenv('db_host');
$Database = getenv('db_database');
$User = getenv('db_user');
$Port = getenv('db_port');
$db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password") or die ("Error de Conexion".pg_last_error());

//Variables de Insertar Datos
$Nombre =$_POST['Nom'];
$Fecha =$_POST['Fech'];
  
  $sql = "INSERT INTO Empleados (nombre, feching) VALUES ('$Nombre', '$Fecha')";
  
  if(pg_query($db, $sql)){
echo "<script>
alert('Registro nuevo');
    window.location= 'agregar.php'
</script>";;
}else{
echo "Error: ".$sql."<br>".pg_last_error($db);
}
?>
