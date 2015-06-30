<?php 
include('header.php');
?>
<h2>Productos</h2>
	<?php
	include"conexion.php";
	$query=msql_query("query_realizar")or die(msql_error());
	while($f=msql_fetch_array($query)){
	?>
		<div class="producto">
			<img src="img/producto/<?php echo $f['nombre de campo de imagen'];?>" alt="producto">
			<br><spa><?php echo $f['nombre de articulo'];?></spa></br>
			<a href="detalle.php"></a>
		</div>
	<?php
		}
	?>
		<div class="producto">
			<img src="img/ejemplo.jpg" alt="producto">
			<br><spa>Prueba</spa></br>
			<a href="detalle.php"></a>
		</div>

<?php 
include('footer.php');
?>