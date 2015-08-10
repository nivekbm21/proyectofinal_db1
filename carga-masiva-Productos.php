<?php 
	include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '1') {
?>

<h2>Carga de Archivos. <small>Cargar Productos Masivamente</small></h2>

<form action='scriptBD/Cargar-Productos.php' method='post' enctype="multipart/form-data">
   	<table class=table-bordered>
	   	<tr>
		   	<th>Importar Archivo : </th>
		   	<td><input type='file' name='archivo' size='20'></td>
	   	</tr>
   		<tr>
   			<td>
   				<p>Se debe subir el Archivo en formato csv y no debe añadir los titulos de las columnas</p>
				<p><a href="Carga_de_Productos.csv">Descargar Archivo Ejemplo</a></p>
   			</td>
   			<td><input type='submit' name='submit' value='Cargar Archivo'></td>
   		</tr>
	</table>
</form>
<?php
}
else{
	header('Location: login.php');}
include('footer.php');
?>