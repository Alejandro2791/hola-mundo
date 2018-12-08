<?php
if($resultado > 0){
echo "<table style='border-collapse: collapse;' align='center' border='1'>";
echo "<tr id='parrafo'>";
echo "<th>Nombre</th>";
echo "<th>Año</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
echo "<tr id='parrafo3'>";
echo "<td>" . $columna['descripcion'] . "</td><td>" . $columna['anioEstreno'] . "</td>";
echo "</tr>";
}
echo "</table>";
}else{
echo "Error: ".$sql."<br>".mysqli_error($conexion);
}
?>
