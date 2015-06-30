<?php 
include('header.php');
?>
<h2>Productos</h2>
<?php
	include"conexion.php";
	$query = sqlsrv_query($conn,"SELECT * FROM Categoria");
	while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
?>
		<div class="producto">
			<img src="img/ejemplo.jpg" alt="producto">
			<br><spa><?php echo $row['Descripcion'];?></spa></br>
			<a href="detalle.php"></a>
		</div>
	<?php
		}
	?>
	<div class="producto">
		<img src="img/ejemplo.jpg" alt="producto">
		<br><spa>Prueba</spa></br>
		<a href="detalle.php">pruebas</a>
	</div>
	<div class="producto">
		<img src="img/ejemplo.jpg" alt="producto">
		<br><spa>Prueba</spa></br>
		<a href="detalle.php">pruebas</a>
	</div>
<?php 
include('footer.php');
?>