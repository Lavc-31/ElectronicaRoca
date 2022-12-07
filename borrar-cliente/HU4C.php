<?php

$conexion=pg_connect("host=localhost port=5432 dbname=proyectois user=postgres password=3134");
$query="SELECT nombre,apellidopaterno,apellidomaterno,nombreusuario FROM clientes";
$consulta=pg_query($conexion,$query);

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
              <a class="nav-link" href="../HU17.html">Informacion</a>
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
</body>

<p class="card-text"></p>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
<body>

<center>
	<table class="tablita" border="5">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Nombre de Usuario</th>
				<th>¿Desea eliminar?</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($obj=pg_fetch_object($consulta)){ ?>

				<tr>

					<td><?php echo $obj->nombre;?></td>
					<td><?php echo $obj->apellidopaterno;?></td>
					<td><?php echo $obj->apellidomaterno;?></td>
					<td><?php echo $obj->nombreusuario;?></td>
					<td>
						<form method="post" action="Borrar_cuenta.php">
              <input type="hidden" name="usuario" value="<?php echo $obj->nombreusuario; ?>"> 
              <input type="submit" style="background-color:red;color:white;" onclick="window.location.href=resumen.php" value="Borrar cuenta"> 
            </form>
          </td>
				</tr>
		</tbody>
		<?php
		}
		?>
		</table>
		<p class="card-text"></p>
</center>

<p class="card-text"></p>

<center>
    <footer>
        <div class="text-bg-dark p-3"></div>
            <p>Distribuidora online de productos electronicos.</p>
            <p><a href="mailto:hege@example.com">electronicaroca@gmail.com</a></p>
        </div>
    </footer>
</center>
</html> 