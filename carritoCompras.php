<?php 
include('header.php');
?>
<h2>Mi Carrito de Compras</h2>

<table>
	<tr>
		<th>Nombre de Producto</th>
		<th>Cantidad</th>
		<th>Precio por Unidad</th>
		<th>Precio por Producto</th>
	</tr>
<?php
	include"conexion.php";

	$query = sqlsrv_query($conn,"SELECT Codigo_Cliente,Codigo_Producto,Cantidad_Producto,Precio,total FROM Carrito_Compras where Codigo_Cliente =".$Codigo);
	$total = sqlsrv_query($conn,"SELECT sum(total) FROM Carrito_Compras where Codigo_Cliente =".$Codigo);
	$row1 = sqlsrv_fetch_array( $total, SQLSRV_FETCH_ASSOC )
	while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td><?php echo $row['Codigo_Producto'];?></td>
		<td><?php echo $row['Cantidad'];?></td>
		<td><?php echo $row['Precio'];?></td>
		<td><?php echo $row['total'];?></td>
	</tr>

<?php } ?>
<tr>
	<th colspan="3">Total:</th>
	<td><?php echo $row1['total'];?></td>
</tr>
</table>
<?php 
include('footer.php');
 ?>