<?php
$conexion=pg_connect("host=localhost port=5432 dbname=proyectois user=postgres password=3134");

$nombreusuario = $_REQUEST['usuario'];

$query=("SELECT * FROM funcionarios WHERE nombreusuario = '$nombreusuario';");
$consulta=pg_query($conexion,$query) or die ('hubo un error en la consulta.').pg_last_error();

if(pg_num_rows($consulta)<1)
{
	echo 'El usuario ' .$nombreusuario. 'no existe';
} else {

$query_delete=pg_query($conexion,"DELETE FROM funcionarios WHERE nombreusuario = '$nombreusuario';") or die ('Hubo un error en la consulta.').pg_last_error();
header("location: HU4F.php");
}
	
    pg_close();
?>