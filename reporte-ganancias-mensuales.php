<?php 
include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>


<script language="javascript">
	$(document).ready(function() {
		$(".botonExcel").click(function(event) {
			$("#datos_a_enviar").val( $("<div>").append( $("#vista-cliente").eq(0).clone()).html());
			$("#FormularioExportacion").submit();
		});
	});
</script>

<h2>Reporte de ganancias mensuales</h2>
<table id="VistaProductos">
	<tr>
		<th class="VistaProductoscolum">Total vendido durante el mes de Enero</th>
		
		
		
		
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT SUM(total) AS TotalMensual FROM 
Factura_Producto f join Factura fact on f.Numero_Factura = fact.Numero_Factura
where fact.Fecha BETWEEN  ('2015/01/01')
AND  ('2015/01/31')");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaProductoscolum"><?php echo $row['TotalMensual'];?></td>
		
		
		

		
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
