<?php
$conexion=pg_connect("host=localhost port=5432 dbname=proyectois user=postgres password=3134");

$nombre = $_REQUEST['producto'];

$query=("SELECT * FROM productos WHERE nombre = '$nombre';");
$consulta=pg_query($conexion,$query) or die ('hubo un error en la consulta.').pg_last_error();

if(pg_num_rows($consulta)<1)
{
	echo 'El usuario ' .$nombre. 'no existe';
} else {

$query_delete=pg_query($conexion,"DELETE FROM productos WHERE nombre = '$nombre';") or die ('Hubo un error en la consulta.').pg_last_error();
header("location: HU10.php");
}
	
    pg_close();
?>