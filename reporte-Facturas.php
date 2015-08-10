<?php 
include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>


<script language="javascript">
	$(document).ready(function() {
		$(".botonExcel").click(function(event) {
			$("#datos_a_enviar").val( $("<div>").append( $("#VistaProductos").eq(0).clone()).html());
			$("#FormularioExportacion").submit();
		});
	});
</script>

<h2>Historial de transacciones</h2>
<table id="VistaProductos">
	<tr>
		<th class="VistaFacturacolum">Numero de transaccion</th>
		
		<th class="VistaFacturacolum">Codigo de Cliente</th>
		<th class="VistaFacturacolum">Fecha</th>
		<th class="VistaFacturacolum">Codigo del producto</th>
		<th class="VistaFacturacolum">Cantidad de unidades</th>
		<th class="VistaFacturacolum">Precio</th>
		<th class="VistaFacturacolum">Total de la transaccion</th>
		
		
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT f.Numero_Factura as numFactura ,Codigo_Cliente,Fecha,p.Codigo_Producto as codigoProducto 
		,p.Cantidad_Producto as cantProducto,p.Precio as precio,p.Total as total FROM
Factura f join Factura_Producto p on f.Numero_Factura = p.Numero_Factura");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaFacturacolum"><?php echo $row['numFactura'];?></td>
		<td class="VistaFacturascolum"><?php echo $row['Codigo_Cliente'];?></td>
		<td class="VistaFacturascolum"><?php echo $row['Fecha']->format("d.m.Y");?></td>							
		<td class="VistaFacturacolum"><?php echo $row['codigoProducto'];?></td>
		<td class="VistaFacturacolum"><?php echo $row['cantProducto'];?></td>
		<td class="VistaFacturacolum"><?php echo $row['precio'];?></td>
		<td class="VistaFacturacolum"><?php echo $row['total'];?></td>
		
		

		
	</tr>
	
<?php } ?>

</table>



<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p><img src="img/descarga.png" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

<?php
}
else{
  header('Location: login.php');}
include('footer.php');
?>