<?php
  $host='localhost';
  $bd='proyectois';
  $user='postgres';
  $pass='3134';
  session_start();
  $username = $_SESSION['nombre_usuario'];
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
              <a class="nav-link active" aria-current="page" href="../inicio.html">Inicio</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Registrarse
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href=""></a></li>
              <li><a class="dropdown-item" href="../HU3A.html">Administrador</a></li>
              <li><a class="dropdown-item" href="../HU3F.html">Funcionario</a></li>
              <li><a class="dropdown-item" href="../HU3C.html">Cliente</a></li>
            </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Descuentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../HU17.html">Información</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Productos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href=""></a></li>
              <li><a class="dropdown-item" href="../HU16.html">Categorias</a></li>
              <li><a class="dropdown-item" href="">Historial</a></li>
              <li><a class="dropdown-item" href="../HU19.html">Destacados</a></li>
              <li><a class="dropdown-item" href="../login-admin/HU9A.php">Agregar</a></li>
              <li><a class="dropdown-item" href="">Modificar</a></li>
              <li><a class="dropdown-item" href="">Eliminar</a></li>
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
  <center>
    <form class="mb-3" method="POST" style="margin-top:100px;">
    <div class="col-md-6" style= "margin-top:30px;">
        <label for="inputAddress2" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="username" >
    </div>
    <div class="col-md-6" style= "margin-top:30px;">
        <label for="inputAddress2" class="form-label">Contraseña nueva</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="col-12" style= "margin-top:30px;">
      <form>
        <input type="submit" style="background-color:black;color:white;" value="Cambiar" name="cambiar"/>
      </form>
    </div>
    </form>
  </center>
  </body>

  <center>
    <footer>
        <div class="text-bg-dark p-3"></div>
            <p>Distribuidora online de productos electronicos.</p>
            <p><a href="mailto:hege@example.com">electronicaroca@gmail.com</a></p>
        </div>
    </footer>
  </center>
  </html>
<?php
if(isset($_POST['cambiar'])){
  $nombreusuario = $_POST['username'];
  $nuevacontrasena = $_POST['password'];

  $consulta = ("UPDATE administradores SET contraseña = '$nuevacontrasena' WHERE nombreusuario = '$nombreusuario';");
  $query = pg_query($conexion, $consulta);
  echo "contraseña cambiada exitosamente";
}
?>