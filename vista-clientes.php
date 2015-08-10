<?php include('header.php');
if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>

<h2>Vista Clientes</h2>

<table id="VistaProductos">
	<tr>
		<th class="VistaClientecolum">Codigo</th>
		<th class="VistaClientecolum">Nombre</th>
		<th class="VistaClientecolum">Primer_Apellido</th>
		<th class="VistaClientecolum">Segundo_Apellido</th>
		<th class="VistaClientecolum">Usuario</th>
		<th class="VistaClientecolum">Contrasena</th>
		<th class="VistaClientecolum">Correo</th>
		<th class="VistaClientecolum">Estado</th>
		<th class="VistaClientecolum">Rol</th>
		
		
		
		<td> <button  type="button" class="btn btn_default"  onClick=" window.location.href='agregarCliente.php' " ><span class="glyphicon glyphicon-plus" > </span></button></td>   </td>
	</tr>

<?php
	include"conexion.php";
	

	$sql = sqlsrv_query($conn,"SELECT * FROM Cliente");
	
	while ($row = sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC )) {
?>
	<tr>
		<td class="VistaClientecolum"><?php echo $row['Codigo'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Nombre'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Primer_Apellido'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Segundo_Apellido'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Usuario'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Contrasena'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Correo'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Estado'];?></td>
		<td class="VistaClientecolum"><?php echo $row['Rol'];?></td>
		
	
		
	</tr>
	

<?php } ?>
</table>


<?php
}
else{
  header('Location: login.php');}
include('footer.php');
?>