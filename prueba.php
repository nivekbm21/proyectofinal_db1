<?php 
include('header.php');
?>
<h2>Producto</h2>
<?php


$Codigo= htmlspecialchars($_GET["codigo"]);
echo $Codigo;

	include"conexion.php";
	//$query = sqlsrv_query($conn,"select Codigo_Producto,Nombre,Cod_Categoria,Foto_Principal From Producto where Cod_Categoria=".$Codigo." and Estado=1;");
?>
<?php 
include('footer.php');
?>
	
