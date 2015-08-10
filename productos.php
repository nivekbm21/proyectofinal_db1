<?php 
include('header.php');
?>
<h2>Producto</h2>
<?php
	$Codigo= htmlspecialchars($_GET["codigo"]);
	include"conexion.php";
	if(empty($Codigo)){
		$query = sqlsrv_query($conn,"select Codigo_Producto,Nombre,Cod_Categoria,Foto From Producto where Estado=1;");
	}else{
		$query = sqlsrv_query($conn,"select Codigo_Producto,Nombre,Cod_Categoria,Foto From Producto where Cod_Categoria=".$Codigo." and Estado=1;");
	}
	
	while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
?>
		<div class="producto">
			<img src="img/productos/<?php echo $row['Foto'];?>" alt="producto">
			<br><spa><?php echo $row['Nombre'];?></spa></br>
			<a href="detalle.php?codigoProducto=<?php echo $row['Codigo_Producto'];?>">Ver Productos</a>
		</div>
	<?php
		}
	?>

<?php 
echo $Codigo;
include('footer.php');
?>
