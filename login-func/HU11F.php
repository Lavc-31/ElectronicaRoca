<?php
$host='localhost';
$bd='proyectois';
$user='postgres';
$pass='3134';
$conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass");
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
              <li><a class="dropdown-item" href="">Modificar</a></li>
              <li><a class="dropdown-item" href="">Eliminar</a></li>
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
      <label for="inputAddress2" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca">
    </div>
    <div class="col-md-6">
        <label for="inputAddress2" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Stock</label>
      <input type="number" class="form-control" name="stock">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Descripción del Producto</label>
      <input type="text" class="form-control" name="descripcion">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Código</label>
      <input type="text" class="form-control" name="codigo">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Categorias</label>
      <select class="form-select form-select-sm" name="categorias" aria-label=".form-select-sm example">
          <option selected>Haga click para ver más</option>
          <option value="1">Hogar</option>
          <option value="2">Computacion</option>
          <option value="3">Jardin</option>
          <option value="4">Equipos de oficina</option>
          <option value="5">Cuidado personal</option>
          <option value="6">Climatizacion</option>
          <option value="7">Fitness</option>
          <option value="8">Higiene personal</option>
          <option value="9">Camping</option>
          <option value="10">Defensa personal</option>
      </select>      
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Administrador</label>
      <select class="form-select form-select-sm" name="administradores" aria-label=".form-select-sm example">
          <option selected>Haga click para ver más</option>
          <option value="2">Joel Carvajal</option>
          <option value="5">Joaquin Prieto</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Funcionario</label>
      <select class="form-select form-select-sm" name="funcionarios" aria-label=".form-select-sm example">
          <option selected>Haga click para ver más</option>
          <option value="3">Gonzalo Pereira</option>
          <option value="4">Lilian Martinez</option>
          <option value="5">Fernando Iturra</option>
      </select>
    </div>
  
    <center>
    <div class="col-12">
      <form>
        <input type="submit" style="background-color:black;color:white;" value="Actualizar Producto" name="actualizarproducto"/>
      </form>
    </div>
  </center>
  </form>
</body>
</html>
<?php
  if(isset($_POST['actualizarproducto'])){
    $id_categoria = $_POST['categorias'];
    $id_administrador = $_POST['administradores'];
    $id_funcionario = $_POST['funcionarios'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];
    $codigo = $_POST['codigo'];

    $consulta = ("UPDATE productos SET id_categoria = '$id_categoria' , id_administrador = '$id_administrador', id_funcionario = '$id_funcionario', nombre = '$nombre', marca = '$marca', precio = '$precio', stock = '$stock', descripcion = '$descripcion', codigo = '$codigo' WHERE nombre = '$nombre';");

    $query = pg_query($conexion, $consulta);
    echo  "Producto actualizado exitosamente";
  }
?>