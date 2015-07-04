<?php 
include('header.php');
?>
<h2>Categorias</h2>
<?php
	include"conexion.php";

	$query = sqlsrv_query($conn,"SELECT * FROM Categoria");
	while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
?>
		<div class="producto">
			<img src="img/<?php echo $row['Foto'];?>" alt="producto">
			<br><spa><?php echo $row['Descripcion'];?></spa></br>
			<a href="productos.php?codigo=<?php echo $row['Codigo'];?>">Ver Productos</a>
		</div>
	<?php
		}
	?>
<?php 
include('footer.php');
?>