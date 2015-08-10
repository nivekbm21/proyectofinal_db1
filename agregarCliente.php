<?php 
	include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '2') {
?>

<h2>Cliente</h2>
<?php
	$Codigo= htmlspecialchars($_GET["codigo"]);
	include"conexion.php";
	if(empty($Codigo)){
		
	}else{
		
	}
?>

<form action="scriptBD/insertarClienteDB.php" method="post"/>
<table>
   
   <tr>
   	<td>Nombre:</td>
   	<td><input type="text" name="nombre"/></td>
   </tr>
   <tr>
   	<td>Primer Apellido:</td>
   	<td><input type="text" name="apellido1"></td>
	</tr>
	<tr>
	<td>Segundo Apellido:</td>
   	<td><input type="text" name="apellido2"></td>
	</tr>
	<tr>
	<td>Usuario:</td>
  	<td> <textarea rows="4" cols="50" name="usuario">El usuario a ingresar debe de tener un maxino de 10 Caracteres.
  	</textarea> </td>
	</tr>
	<tr>
	<td>Contrasena:</td>
  	<td> <textarea rows="4" cols="50" name="contrasena">La contrasena  a ingresar debe de tener un maxino de 15 Caracteres.
  	</textarea> </td>
	</tr>
	<tr>
	<td>Correo:</td>
	<td> <input type="text" name="correo"></td>	
	</tr>
	<tr>
	<td>Fecha de Nacimiento:</td>
	<td> <input type="datetime" name="fecha_nacimiento"></td>	
	</tr>
	  
</table>
<p><input type="submit" value="Comprobar Cliente"> 
   <input type="reset" value="borrar todo"></p>
</form>


<?php
}
else{
	header('Location: login.php');}
include('footer.php');
?>
