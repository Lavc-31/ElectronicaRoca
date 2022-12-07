<?php
$host='localhost';
$bd='proyectois';
$user='postgres';
$pass='3134';
$conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectronicaRoca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
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
              <li><a class="dropdown-item" href="HU3A.php">Administrador</a></li>
              <li><a class="dropdown-item" href="HU3F.php">Funcionario</a></li>
              <li><a class="dropdown-item" href="HU3C.php">Cliente</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Iniciar Sesion
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href=""></a></li>
              <li><a class="dropdown-item" href="login-admin/HU1A.html">Administrador</a></li>
              <li><a class="dropdown-item" href="login-func/HU1F.html">Funcionario</a></li>
              <li><a class="dropdown-item" href="login-cliente/HU1C.html">Cliente</a></li>
            </ul>
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
              <li><a class="dropdown-item" href="HU16.html">Categorias</a></li>
              <li><a class="dropdown-item" href="">Historial</a></li>
              <li><a class="dropdown-item" href="HU19.html">Destacados</a></li>
            </ul>
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
  
  <form class="row g-3" method="POST" style="margin-top:15px;" id="formulario" name="formulario">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellidopaterno">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Apellido Materno</label>
      <input type="text" class="form-control" name="apellidomaterno">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Fecha de nacimiento</label>
      <input type="text" class="form-control" placeholder="YYYY/MM/DD" name="fechanacimiento">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Dirección</label>
      <input type="text" class="form-control" name="direccion">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrasena">
    </div>
    <div class="col-md-6">
        <label for="inputAddress2" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="nombreusuario">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Correo electronico</label>
      <input type="Email" class="form-control" name="email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Rut (con puntos y guión)</label>
      <input type="text" class="form-control" name="rut">
    </div>
  
    <center>
    <div class="col-12">
      <form>
        <input type="submit" style="background-color:black;color:white;" value="Crear cuenta" name="crearcuenta" />
      </form>
    </div>
  </center>
  </form>
</body>
</html>
<?php
  if(isset($_POST['crearcuenta'])){
    $nombre = $_POST['nombre'];
    $apellidopaterno = $_POST['apellidopaterno'];
    $apellidomaterno = $_POST['apellidomaterno'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];
    $nombreusuario = $_POST['nombreusuario'];
    $email = $_POST['email'];
    $rut = $_POST['rut'];

    $consulta = ("INSERT INTO administradores(nombre,apellidopaterno,apellidomaterno,fechanacimiento,direccion,contraseña,nombreusuario,email,rut) VALUES('$_REQUEST[nombre]','$_REQUEST[apellidopaterno]','$_REQUEST[apellidomaterno]','$_REQUEST[fechanacimiento]','$_REQUEST[direccion]','$_REQUEST[contrasena]','$_REQUEST[nombreusuario]','$_REQUEST[email]','$_REQUEST[rut]')");

    $query = pg_query($conexion, $consulta);
  }
?>