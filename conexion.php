<?php
$Password = getenv('db_password');
$db = pg_connect("host='ec2-54-163-230-178.compute-1.amazonaws.com' dbname=d73969j44gs1g8 port=5432 user=twqtfrzpcthcer password=$Password") or die ("Error de Conexion".pg_last_error());

//Variables de Insertar Datos
$Nombre =$_POST['Nom'];
$Fecha =$_POST['Fech'];
  
  $sql = "INSERT INTO Empleados (nombre, feching) VALUES ('$Nombre', '$Fecha')";
  
  if(pg_query($db, $sql)){
echo "<script>
alert('Registro nuevo');
    window.location= 'index.php'
</script>";;
}else{
echo "Error: ".$sql."<br>".pg_last_error($db);
}
?>
