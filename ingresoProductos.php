<?php 
include('header.php');
?>
<h2>Producto</h2>
<?php
	$Codigo= htmlspecialchars($_GET["codigo"]);
	include"conexion.php";
	if(empty($Codigo)){
		$query = sqlsrv_query($conn,"select Codigo_Producto,Nombre,Cod_Categoria,Foto_Principal From Producto where Estado=1;");
	}else{
		$query = sqlsrv_query($conn,"select Codigo_Producto,Nombre,Cod_Categoria,Foto_Principal From Producto where Cod_Categoria=".$Codigo." and Estado=1;");
	}
?>

<form action="comprobar.php" method="post"/>
<table>
   <tr>
   	<td>Nombre:</td>
   	<td><input type="text" name="nombre"/></td>
   </tr>
    <tr>
   	<td>Precio:</td>
   	<td><input type="number" min="0" max="1000000000" name="precio"/></td>
   </tr>
   <tr>
   	<td>Descripcion:</td>
   	<td> <textarea rows="4" cols="50" name="descripcion">Describa el producto haciendo referencia a las funcionalidades del mismo.
	</textarea></td>
   </tr>
   <tr>
   	<td>Caracteristicas:</td>
   	<td><textarea rows="4" cols="50" name="descripcion">Solo ingresar una Caracteristica por linea
	</textarea></td>
   </tr>
   <tr>
   	<td>Existencia:</td>
   	<td><input type="number" min="0" max="1000000000"name="existencia"/></td>
   </tr>
   <tr>
   	<td>Disponible:</td>
   	<td>
   		<select name="disponible">
	    <option value="1">Si</option> 
	    <option value="0">No</option>
		</select>
   </tr>
   <tr>
   	<td>Marca:</td>
   	<td>
   		<select name="marca">
	    <option value="1">Si</option> 
	    <option value="0">No</option>
		</select>
   </tr>
	<tr>
   	<td>Categoria:</td>
   	<td>
   		<select name="categoria">
	    <option value="1">Si</option> 
	    <option value="0">No</option>
		</select>
   </tr>
</table>
<p><input type="submit" value="Comprobar el formulario"> 
   <input type="reset" value="borrar todo"></p>
</form>

<?php 
include('footer.php');
?>