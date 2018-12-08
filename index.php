<?php

$db = pg_connect("host='ec2-54-163-230-178.compute-1.amazonaws.com' dbname=d73969j44gs1g8 port=5432 user=twqtfrzpcthcer password=166e51bc5a3acc6e007301c97255d40aa915918846424cd08fa0192fd7635d86") or die ("Error de Conexion".pg_last_error());
//Variables

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Aplicacion - Hola Mundo</title>

</head>
<body>
    <h1>Aplicacion</h1>
    <hr color="blue" size=3 />
    <h3 id="titulo">Agregar Empleado</h3>
    <hr color="blue" size=3 />
        <p id="parrafo2">
        <strong>Nombre:</strong> <input type="text" name="Nom" size="40">
        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<strong>Fecha de Ingreso:</strong> <input type="text" name="Fech" size="10">
    </p>

    <p id="parrafo3">
        <!–-   Creacion de Botones  -–>
        <input id="boton" type="submit" value="Registrar" />

    </p>

</body>
</html>
