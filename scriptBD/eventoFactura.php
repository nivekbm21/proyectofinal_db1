<?php
session_start();

if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') {
	
	include"../conexion.php";
	$now=date("Y-m-d");
	$query = sqlsrv_query($conn,"INSERT INTO Factura (fecha, Codigo_Cliente) values ('".$now."',".$_SESSION["codigo"].")");

	$factura=sqlsrv_query($conn,"SELECT TOP 1 Numero_Factura FROM Factura order by Numero_Factura DESC");
	$row = sqlsrv_fetch_array( $factura, SQLSRV_FETCH_ASSOC );


	$datos = sqlsrv_query($conn,"SELECT * FROM carrito where Codigo_Cliente='".$_SESSION["codigo"]."'");
    
	while ($row1 = sqlsrv_fetch_array( $datos, SQLSRV_FETCH_ASSOC )) {
		
		$insetarfactura = sqlsrv_query($conn,"INSERT INTO Factura_Producto (Numero_Factura,Codigo_Producto,Cantidad_Producto,Precio,Total) values ('".$row["Numero_Factura"]."',".$row1["Codigo_Producto"].",".$row1["Cantidad_Producto"].",".$row1["Precio"].",".$row1["Total"].")");

	}
	$borrar = sqlsrv_query($conn,"delete Carrito_Compras where Codigo_Cliente='".$_SESSION["codigo"]."'");
	header('Location: ../factura.php');
}
else{
	header('Location: ../login.php');
}
?>