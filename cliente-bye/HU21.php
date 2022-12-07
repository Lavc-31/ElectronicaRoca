<?php

$conexion=pg_connect("host=localhost port=5432 dbname=proyectois user=postgres password=3134");
$query2="SELECT nombreusuario,nombre,apellidopaterno,apellidomaterno,fechanacimiento,rut,email,direccion FROM clientes";
$consulta2=pg_query($conexion,$query2);

?>

<?php
  session_start();
  $username = $_SESSION['nombre_usuario'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectronicaRoca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">ElectronicaRoca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Registrarse
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href=""></a></li>
              <li><a class="dropdown-item" href="HU3A.html">Administrador</a></li>
              <li><a class="dropdown-item" href="HU3F.html">Funcionario</a></li>
              <li><a class="dropdown-item" href="HU3C.html">Cliente</a></li>
            </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="HU1.html">Ingresar</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">Descuentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HU17.html">Informacion</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Productos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href=""></a></li>
              <li><a class="dropdown-item" href="HU16.php">Categorias</a></li>
              <li><a class="dropdown-item" href="">Historial</a></li>
              <li><a class="dropdown-item" href="HU19.html">Destacados</a></li>
            </ul>
            </li>
            <li class="nav-item">
              <form>
                <input type="button" style="background-color:black;color:white;" onclick="window.location.href='../inicio.html';" value="Cerrar sesión" />
              </form>
            </li>
            <li class="nav-item">
              <nav class="navbar navbar-expand-lg navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand"></a>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
              </nav>
            </li>
              <li class="nav-item">
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </head>
  <body>
    <div class="text-center">
      <p style="font-size:20px">Datos de la cuenta a eliminar</p>
      <ul class="list-group">
        <?php
        if (isset($_SESSION)) {
          $obj=pg_fetch_object($consulta2)
        ?>
        <li class="list-group-item">Nombre de Usuario: <?php echo $obj->nombreusuario;?></li>
        <li class="list-group-item">Nombre: <?php echo $obj->nombre;?></li>
        <li class="list-group-item">Apellido Materno: <?php echo $obj->apellidomaterno;?></li>
        <li class="list-group-item">Apellido Paterno: <?php echo $obj->apellidopaterno;?></li>
        <li class="list-group-item">Fecha de nacimiento: <?php echo $obj->fechanacimiento;?></li>
        <li class="list-group-item">Rut: <?php echo $obj->rut;?></li>
        <li class="list-group-item">Correo electronico: <?php echo $obj->email;?></li>
        <li class="list-group-item">Dirección: <?php echo $obj->direccion;?></li>
      </ul>
      <form method="post" action="Borrar_cuenta.php">
        <input type="hidden" name="usuario" value="<?php echo $obj->nombreusuario; ?>"> 
        <input type="submit" style="background-color:red;color:white;" onclick="window.location.href=../inicio.html" value="Eliminar cuenta"> 
      </form>
      <?php
      }
      ?>
    </div>
  </body>
</html>