<?php include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1') {
?>

<h2>Vista Factura</h2>

<table id="VistaFactura">
	<tr>
		<th class="VistaFacturacolum">Numero de Factura</th>
		<th class="VistaFacturacolum">Fecha de Compra</th>
		<th class="VistaFacturacolum">Detalle</th>	
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT Numero_Factura,Fecha from Factura f where Codigo_Cliente=".$_SESSION["codigo"]);
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaFacturacolum"><?php echo $row['Numero_Factura'];?></td>
		<td class="VistaFacturacolum"><?php echo $row['Fecha']->format('Y-m-d');?></td>
		<td class="VistaFacturacolum"><button  type="button" class="btn btn_default"  onClick=" window.location.href='facturadetalle.php?factura=<?php echo $row['Numero_Factura'];?>&fecha=<?php echo $row['Fecha']->format('Y-m-d');?>' " ><span class="glyphicon glyphicon-zoom-in" > </span></button></td>
	</tr>
	

<?php } ?>

</table>

<?php
}
else{
  header('Location: login.php');}
include('footer.php');
?>