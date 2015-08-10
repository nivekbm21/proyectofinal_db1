<?php include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>

<h2>Vista Producto</h2>

<table id="VistaProductos">
	<tr>
		<th class="VistaProductoscolum">Codigo</th>
		<th class="VistaProductoscolum">Caracteristicas</th>
		<th class="VistaProductoscolum">Nombre</th>
		<th class="VistaProductoscolum">Precio</th>
		<th class="VistaProductoscolum">Descripcion</th>
		<th class="VistaProductoscolum">Existencia</th>
		<th class="VistaProductoscolum">Estado</th>
		<th class="VistaProductoscolum">Marca</th>
		<th class="VistaProductoscolum">Categoria</th>
		
		<td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregarProducto.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT * FROM Producto");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaProductoscolum"><?php echo $row['Codigo_Producto'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Caracteristica'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Nombre'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Precio'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Descripcion'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Existencia'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Estado'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Cod_Marca'];?></td>
		<td class="VistaProductoscolum"><?php echo $row['Cod_Categoria'];?></td>
		

		
	</tr>
	
<?php } ?>

</table>

<?php
}
else{
  header('Location: login.php');}
include('footer.php');
?>