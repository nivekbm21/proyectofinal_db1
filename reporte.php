<?php 
include('header.php');
?>


<script language="javascript">
	$(document).ready(function() {
		$(".botonExcel").click(function(event) {
			$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
			$("#FormularioExportacion").submit();
		});
	});
</script>
<table id="Exportar_a_Excel">
<tr>
<td>Celda1</td>
<td>Celda2</td>
<td>Celda3</td>
<td>Celda4</td>
<td>Celda5</td>
</tr><tr>
<td>Celda6</td>
<td>Celda7</td>
<td>Celda8</td>
<td>Celda9</td>
<td>Celda10</td>
</tr>
</table>

<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p><img src="img/descarga.png" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

<?php 
include('footer.php');
 ?>
