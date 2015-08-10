<?php 
	include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') {
?>
<h2>Factura <?php echo $_GET["factura"] ?>: <small><?php echo $_GET["fecha"] ?></small></h2>

<table id="carritoCompras">
	<tr>
		<th class="carritocomprascolum">Nombre de Producto</th>
		<th class="carritocomprascolum">Cantidad</th>
		<th class="carritocomprascolum">Precio por Unidad</th>
		<th class="carritocomprascolum">Precio por Producto</th>
	</tr>
<?php
	include"conexion.php";
	$productos = sqlsrv_query($conn,"SELECT * FROM facturadetalle where Numero_Factura=".$_GET["factura"]);
	$total = sqlsrv_query($conn,"SELECT sum(Total) as Total FROM facturadetalle where Numero_Factura=".$_GET["factura"]);
	$row1 = sqlsrv_fetch_array( $total, SQLSRV_FETCH_ASSOC );
	while ($row = sqlsrv_fetch_array( $productos, SQLSRV_FETCH_ASSOC )) {
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
<?php
}
else{
	header('Location: login.php');}
include('footer.php');
?>