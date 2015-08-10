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
                if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') { ?>
                  <li><a href="vista-productos.php">Administracion de Productos</a></li>
                  <li><a href="agregarProducto.php">Agregar Producto</a></li>
                  <li><a href="carga-masiva-Productos.php">Carga Masiva</a></li>
                <?php }
                ?>
            </ul>
          </li>
          
          <li><a href="categorias.php">Categorias</a></li>
          <li><a href="contactenos.php">Cont&aacute;ctenos</a></li>
          <?php 
            if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
           ?>
          <li><a href="">Reportes</a>
          <ul>
            <li><a href="reporte-Facturas.php">Facturas</a></li>
            <li><a href="reporte-ganancias-anuales.php">Ganancias Anuales</a></li>
            <li><a href="reporte-ganancias-mensuales.php">Ganancias Mensuales</a></li>
            <li><a href="reporte-lista-productos-mas-vendidos.php">Lista de productos Vendidos</a></li>
            <li><a href="reporte-Productos-disponibles.php">Productos Disponibles</a></li>
            <li><a href="reporte-productos-vendidos.php">Productos Vendidos</a></li>
            <li><a href="reporte-Productos.php">Productos</a></li>
            <li><a href="reporte-ventas-anuales.php">Ventas Anuales</a></li>
          </ul>
          </li>
          <?php }?>
          <?php 
            if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
           ?>
          <li><a href="">Administracion</a>
          <ul>
            <li><a href="vista-factura.php">Ver Factura</a></li>
            <li><a href="vista-clientes.php">Administracion de Clientes</a></li>
          </ul>
          </li>
          <?php }?>
          <li><a href="#">Mi Cuenta</a>
            <ul>
            

            <?php 
                if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') { ?>
                  <li><a href="cerrar-Sesion.php">Cerrar Seccion</a></li>
                  <li><a href="carritoCompras.php">Mi Carrito de Compras</a></li>
                  <li><a href="factura.php">Mis Facturas</a></li>
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