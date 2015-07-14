<?php 
include('header.php');
?>

<form action="comprobar.php" method="post"/>
<table>
   <tr>
   	<td>Nombre:</td>
   	<td><input type="text" name="nombre"/></td>
   </tr>
   <tr>
   	<td>Apellido:</td>
   	<td><input type="text" name="apellido"/></td>
   </tr>
    <tr>
   	<td>Correo:</td>
   	<td><input type="text" name="correo"/></td>
   </tr>
   <tr>
   	<td>Empresa:</td>
   	<td><input type="text" name="correo"/></td>
   </tr>
   <tr>
   	<td>Telefono:</td>
   	<td><input type="text" name="telefono"/></td>
   </tr>
   <tr>
   	<td>Consulta:</td>
   	<td> <textarea rows="4" cols="50" name="consulta">
	</textarea></td>
   </tr>
   
</table>
<p><input type="submit" value="Comprobar el formulario"> 
   <input type="reset" value="borrar todo"></p>
</form>

<?php 
include('footer.php');
 ?>

