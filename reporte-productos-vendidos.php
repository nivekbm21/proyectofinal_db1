<?php 
include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>


<script language="javascript">
	$(document).ready(function() {
		$(".botonExcel").click(function(event) {
			$("#datos_a_enviar").val( $("<div>").append( $("#ventaProductos").eq(0).clone()).html());
			$("#FormularioExportacion").submit();
		});
	});
</script>

<h2>Total de Items vendidos</h2>
<table id="ventaProductos">
	<tr>
		<th class="VistaProductoscolum">Codigo de producto</th>
		<th class="VistaProductoscolum">nombre</th>
		<th class="VistaProductoscolum">cantidad vendida</th>
		<th class="VistaProductoscolum">Total Vendido</th>
		
		
		
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT  f.Codigo_Producto as Codigo,p.Nombre as nombre, SUM(Cantidad_Producto) AS CantidadVendida,
SUM(Total) AS TotalVendido
FROM Factura_Producto f join Producto p on f.Codigo_Producto=p.Codigo_Producto
Group by p.Nombre,f.Codigo_Producto order by CantidadVendida desc");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaProductoscolum"><?php echo $row['Codigo'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['nombre'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['CantidadVendida'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['TotalVendido'];?></td>
		
		

		
	</tr>
	
<?php } ?>

</table>



<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p><img src="img/descarga.png" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

<?php 
include('footer.php');
 ?>
