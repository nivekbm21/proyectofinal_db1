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

<h2>Lista global de productos mas vendidos</h2>
<table id="VistaProductos">
	<tr>
	
		<th class="VistaProductoscolum">Nombre</th>
		<th class="VistaProductoscolum">Cantidad Vendida</th>
		
		
		
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT top 5 p.Nombre as nombre ,sum(Cantidad_Producto)as cantidadVendida
from Factura_Producto f join Producto p on f.Codigo_Producto=p.Codigo_Producto
group by p.Nombre
order by cantidadVendida desc");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		
		<td class="VistaProductoscolum"><?php echo $row['nombre'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['cantidadVendida'];?></td>
		
		

		
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
