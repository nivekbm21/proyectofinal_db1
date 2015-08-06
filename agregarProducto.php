<?php 
  include ('header.php');
    if (isset($_SESSION['Estado']) && $_SESSION['Estado'] == '1' && $_SESSION['Rol'] == '4') {
?>
<h2>Ingreso de Producto</h2>
<?php
	include"conexion.php";
	$query = sqlsrv_query($conn,"select Codigo, Descripcion From Categoria");
   $query1 = sqlsrv_query($conn,"select Codigo, Nombre From Marca");
?>

<form action="scriptBD/insertarProductoDB.php" method="post"/>
<table class=table-bordered>
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
		</select></td>
   </tr>
   <tr>
   	<td>Marca:</td>
   	<td>
   	<select name="marca">
         <?php 
            while ($row = sqlsrv_fetch_array( $query1, SQLSRV_FETCH_ASSOC )) {
          ?>
	    <option value="<?php echo $row['Codigo'];?>"><?php echo $row['Nombre'];?></option> 
       <?php } ?>
		</select></td>
   </tr>
	<tr>
   	<td>Categoria:</td>
   	<td>
   	<select name="categoria">
	    <?php 
            while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
          ?>
       <option value="<?php echo $row['Codigo'];?>"><?php echo $row['Descripcion'];?></option> 
       <?php } ?>
		</select></td>
   </tr>
   <tr>
      <td>Imagen Principal:</td>
      <td>
         <input type="file" name="fotoPrincipal">
      </td>
   </tr>
</table>

<p><input type="submit" value="Insertar Producto"> 
   <input type="reset" value="borrar todo"></p>
</form>

<?php
}
else{
  header('Location: login.php');}
include('footer.php');
?>