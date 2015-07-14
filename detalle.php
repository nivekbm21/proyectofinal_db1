<?php 
include('header.php');
?>

<?php
	$codigo_pro= htmlspecialchars($_GET["codigoProducto"]);
	include"conexion.php";
	if(empty($codigo_pro)){
		
	}else{
		$query = sqlsrv_query($conn,"SELECT Codigo_Producto,Caracteristica,Nombre,Precio,Descripcion,Existencia,Cod_Marca,Cod_Categoria,Foto_Principal FROM Producto where Codigo_Producto=".$codigo_pro." and Estado=1");
		
	}
$row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )


	?>
<h2><?php echo $row['Nombre'];?></h2>

<div>
	Galeria
</div>
	
			<table>
				<tr>
					<th>Codigo de Producto:</th>
					<td><?php echo $row['Codigo_Producto'];?></td>
				</tr>
				<tr>
					<th>Precio:</th>
					<td><?php echo $row['Precio'];?></td>
				</tr>
				<tr>
					<th>Marca:</th>
					<td><?php echo $row['Cod_Marca'];?></td>
				</tr>
				<tr>
					<th>Categoria:</th>
					<td><?php echo $row['Cod_Categoria'];?></td>
				</tr>
				<tr>
					<th>Cantidad de Productos existentes:</th>
					<td><?php echo $row['Existencia'];?></td>
				</tr>
				<tr>
					<th>Caracteristicas:</th>
					<td><?php echo $row['Caracteristica'];?></td>
				</tr>
				<tr>
					<th>Descripcion:</th>
					<td><?php echo $row['Descripcion'];?></td>
				</tr>
			</table>
		
<?php 
include('footer.php');
?>