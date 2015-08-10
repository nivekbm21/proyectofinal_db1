<?php
session_start();

if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') {
	$cod_prod=$_GET["codigoProducto"];
	$precio=$_GET["precio"];
	$cantidad=$_POST["cantidad"];
	$total=$precio*$cantidad;


	include"../conexion.php";

	$query = sqlsrv_query($conn,"SELECT * FROM carrito where Codigo_Producto=".$cod_prod." and Codigo_Cliente='".$_SESSION["codigo"]."'");
	$row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC );
	if($row["Codigo_Producto"]==$cod_prod){
		$cantidad=$cantidad+$row["Cantidad_Producto"];
		$total=$cantidad*$row["Precio"];
		$query1 = sqlsrv_query($conn,"UPDATE Carrito_Compras set Cantidad_Producto='".$cantidad."',Total='".$total."' where Codigo_Producto=".$cod_prod." and Codigo_Cliente='".$_SESSION["codigo"]."'"); 
		header('Location: ../carritoCompras.php');
	}
	else{
		$query2 = sqlsrv_query($conn,"INSERT INTO Carrito_Compras (Codigo_Cliente,Codigo_Producto,Cantidad_Producto,Precio,Total) values (".$_SESSION["codigo"].",".$cod_prod.",".$cantidad.",".$precio.",".$total.")");
		header('Location: ../carritoCompras.php');
		
	}
}
else{
	header('Location: ../login.php');
}
?>