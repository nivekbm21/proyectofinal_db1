<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/submenu.js"></script>
</head>
<body>

  <div id="header">
    <div class="wrapper">
      <div id="nav">
        <ul class="navul">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="productos.php">Productos</a>
            <ul>
              <li><a href="agregarProducto.php">Agregar Producto</a></li>
              <li><a href="#">Item 2</a></li>
            </ul>
          </li>
          
          <li><a href="categorias.php">Categorias</a></li>
          <li><a href="#">Cont&aacute;ctenos</a></li>
          <li><a href="#">Mi Cuenta</a>
            <li><a href="login.php">Ingresar</a></li>
            <li><a href="login.php">Cerrar Seccion</a></li>
              <li><a href="#">Mi Carrito de Compras</a></li>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div id="content">
	<!-- Content here -->