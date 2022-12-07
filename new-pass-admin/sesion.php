<?php
  $host='localhost';
  $bd='proyectois';
  $user='postgres';
  $pass='3134';
  $conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass");
  session_start();
  $nombreusuario = $_POST['username'];
  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  $consulta = ("SELECT * FROM administradores WHERE nombreusuario = '$nombreusuario' AND email = '$email' AND contraseña = '$contrasena';");

  $query = pg_query($conexion, $consulta);
  $cantidad=pg_num_rows($query);
  if ($cantidad>0){
    header("location: HU6A.php");
    $_SESSION['nombre_usuario'] = $usuario;
  }
  else{
    echo "error!!!";
  }
?>