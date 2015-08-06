<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/submenu.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

  <div id="header">
    <div class="wrapper">
      <div id="nav">
        <ul class="navul">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="productos.php">Productos</a>
            <ul>
              <?php 
                if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '4') { ?>
                  <li><a href="agregarProducto.php">Agregar Producto</a></li>
                  <li><a href="carga-masiva-Productos.php">Carga Masiva</a></li>
                <?php }
                else{?>
              <?php } ?>
            </ul>
          </li>
          
          <li><a href="categorias.php">Categorias</a></li>
          <li><a href="contactenos.php">Cont&aacute;ctenos</a></li>
          <li><a href="#">Mi Cuenta</a>
            <ul>
            

            <?php 
                if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') { ?>
                  <li><a href="cerrar-Sesion.php">Cerrar Seccion</a></li>
                  <li><a href="carritoCompras.php">Mi Carrito de Compras</a></li>
            <?php }
                else{?>
                  <li><a href="login.php">Ingresar</a></li>
            <?php } ?>


              </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div id="content">
	<!-- Content here -->