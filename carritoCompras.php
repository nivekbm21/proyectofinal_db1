<?php 
	include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') {
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

	$query = sqlsrv_query($conn,"SELECT * FROM carrito where Codigo_Cliente=".$_SESSION["codigo"]);
	$total = sqlsrv_query($conn,"SELECT sum(Total) as Total FROM carrito where Codigo_Cliente=".$_SESSION["codigo"]);
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
<form action="scriptBD/eventoFactura.php">
	<input type="submit" action="index.php" value="Confirmar Compra">
</form>
<?php
}
else{
	header('Location: login.php');}
include('footer.php');
?>