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
    <h3 id="titulo">Agregar Empleado</h3>
    <hr color="blue" size=3 />
    
    <form method="post" action="agregar.php">
        <p id="parrafo2">
        <strong>Nombre:</strong> <input type="text" name="Nom" size="40">
        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<strong>Fecha de Ingreso:</strong> <input type="text" name="Fech" size="10">
    </p>

    <p id="parrafo3">
        <!–-   Creacion de Botones  -–>
        <input id="boton" type="submit" value="Registrar" />

    </p>
    </form>

</body>
</html>
