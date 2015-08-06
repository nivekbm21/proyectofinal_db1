<?php 
	include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '4') {
?>
<h2>Mi Carrito de Compras</h2>

<table id="carritoCompras">
	<tr>
		<th class="carritocomprascolum">Nombre de Producto</th>
		<th class="carritocomprascolum">Cantidad</th>
		<th class="carritocomprascolum">Precio por Unidad</th>
		<th class="carritocomprascolum">Precio por Producto</th>
	</tr>
<?php
	include"conexion.php";

	$query = sqlsrv_query($conn,"consultaCarrito");

	$total = sqlsrv_query($conn,"SELECT sum(Total) as Total FROM Carrito_Compras");
	$row1 = sqlsrv_fetch_array( $total, SQLSRV_FETCH_ASSOC );
	while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="carritocomprascolum"><?php echo $row['Nombre'];?></td>
		<td class="carritocomprascolum"><?php echo $row['Cantidad_Producto'];?></td>
		<td class="carritocomprascolum"><?php echo $row['Precio'];?></td>
		<td class="carritocomprascolum"><?php echo $row['Total'];?></td>
	</tr>

<?php } ?>
<tr>
	<th colspan="3" class="carritocomprascolum">Total:</th>
	<td class="carritocomprascolum"><?php echo $row1['Total'];?></td>
</tr>
</table>
<form action="index.php">
	<input type="submit" action="index.php" value="Confirmar Compra">
</form>
<form action="index.php">
	<input type="submit" action="index.php" value="Cotizacion">
</form>

<?php
}
else{
	header('Location: login.php');}
include('footer.php');
?>