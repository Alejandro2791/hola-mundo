<?php
$db = pg_connect("host='ec2-54-163-230-178.compute-1.amazonaws.com' dbname=d73969j44gs1g8 port=5432 user=twqtfrzpcthcer password=166e51bc5a3acc6e007301c97255d40aa915918846424cd08fa0192fd7635d86") or die ("Error de Conexion".pg_last_error());

//Variables de Insertar Datos
$Nombre =$_POST['Nom'];
$Fecha =$_POST['Fech']
  
  $sql = "INSERT INTO Empleado (nombre, feching) VALUES ('$Nombre', '$Fecha')"
  
  $resultado = pg_query($db, $sql)
  
  if($resultado){
echo "<script>
alert('Registro nuevo');
</script>";;
}else{
echo "Error: ".$sql."<br>".mysqli_error($conexion);
}
mysqli_close($conexion);
?>
