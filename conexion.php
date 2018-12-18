<?php
$Password = getenv('db_password');
$Host = getenv('db_host');
$Database = getenv('db_database');
$User = getenv('db_user');
$Port = getenv('db_port');
$db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password") or die ("Error de Conexion".pg_last_error());

?>
