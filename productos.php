<?php
session_start();

$host='localhost';
$bd='proyectois';
$user='postgres';
$pass='3134';

$conexion = pg_connect("host=$host dbname=$bd user=$user password=$pass");
?>

<?php
$id_cat = $_GET['var'];
$conexion=pg_connect("host=localhost port=5432 dbname=proyectois user=postgres password=3134");
$query= ("SELECT nombre,marca,precio,stock,codigo FROM productos WHERE id_categoria = $id_cat;");
$consulta=pg_query($conexion,$query);

?>
<?php 
include("modal_carro.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectronicaRoca</title>
    <script src="https://kit.fontawesome.com/9f84892400.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div>
            <a class="navbar-brand" href="/">ElectronicaRoca</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row align-items-center" id="navbarSupportedContent">
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
              <li><a class="dropdown-item" href="">Destacados</a></li>
            </ul>
            </li>
            <li class="nav-item">
              <nav class="navbar navbar-expand-lg navbar-expand-lg navbar-dark bg-dark">
              </nav>
            </li>
              <li class="nav-item">
              </li>
          </ul>
        </div>
        <div>
            <div class="container-fluid d-flex flex-row align-items-center">
                <a class="navbar-brand"></a>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <div style="margin-left:100px"><a class="fas fa-shopping-cart " style="color:white;font-size: 24px;" href="lista_carro.html" ></a></i></div>
              </div>
              
        </div>
      </div>
  </nav>
</body>



<style>
.container_card{    margin: 0 auto;    padding:  0px 20px 20px 20px;    display: grid;    /* width: 800px; */    grid-template-columns: 1fr 1fr ;   grid-gap:1em;        /* grid-row-gap: 60px; */}
.blog-post{    position: relative;    margin-bottom: 15px;    margin: 30px;}
.blog-post img{    width: 100%;    height: 450px;    object-fit: cover;    border-radius: 10px;    }
.blog-post .category{    position: absolute;    top: 20px;    left: 20px;    padding: 10px 15px;  font-size: 14px;    text-decoration: none;    background-color: #e67e22;    color: #fff;    border-radius: 5px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);    text-transform: uppercase;}
.text-content{    position: absolute;    bottom: -30px;    padding: 20px;    background-color: #fff;    width: calc(100% - 20px);    left: 50%;    transform: translateX(-50%);    border-radius: 10px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);/* padding-top: 50px; */}
.text-content h2{    font-size: 20px;    font-weight: 400;    /* margin-bottom: 30px; */}
.text-content img{    height: 70px;    width: 70px;    border: 5px solid rgba(0,0,0,0.1);    border-radius: 50%;    position: absolute;    top: -35px;    left: 35px;}
.tags a{    color: #888;    font-weight: 700;    text-decoration: none;    margin-right: 15px;    transition: 0.3s ease;}
.tags a:hover{    color: #000;}
@media screen and (max-width: 1100px) {    .container_card{        grid-template-columns: 1fr 1fr;        grid-row-gap: 60px;    }}
@media screen and (max-width: 600px) {    .container_card{        grid-template-columns: 1fr;        grid-row-gap: 60px;    }}
</style>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php while($obj=pg_fetch_object($consulta)){ ?>
  <div class="col">
    <div class="card">
      <img src="fotosproductos/soon.jpg" class="card-img-top" width="400" height="400">
      <div class="card-body">
        <h5 class="card-title"><?php echo $obj->nombre;?></h5>
        <form name="formulario" method="post" action="carro.php">
          <select name="cantidad" id="cantidad" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">uno</option>
            <option value="2">dos</option>
            <option value="3">tres</option>
            <option value="4">cuatro</option>
            <option value="5">cinco</option>
            <option value="6">seis</option>
            <option value="7">Siete</option>
            <option value="8">Ocho</option>
            <option value="9">Nueve</option>
            <option value="10">Diez</option>
            <option value="11">Once</option>
            <option value="12">Doce</option>
          </select>
          <p class="card-text"></p>     
            <input name="id" type="hidden" id="id" value="<?php echo $obj->id ?>" />                      
            <input name="titulo" type="hidden" id="titulo" value="<?php echo $obj->nombre; ?>" />
            <input name="precio" type="hidden" id="precio" value="<?php echo $obj->precio; ?>" />
            <input type="submit" class="btn btn-dark" value="AÑADIR AL CARRITO">
          </form>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<p class="card-text"></p>
  <center>
    <footer>
        <div class="text-bg-dark p-3"></div>
            <p>Distribuidora online de productos electronicos.</p>
            <p><a href="mailto:hege@example.com">electronicaroca@gmail.com</a></p>
        </div>
    </footer>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html> 
