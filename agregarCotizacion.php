<?php 
include ('header.php');
?>

<h2>Solicitud de Cotizacion</h2>

<?php
	include"conexion.php";
	$query = sqlsrv_query($conn,"select Codigo,Usuario From cliente");
   
?>

<form action="scriptBD/insertarProductoDB.php" method="post"/>
<table>
   <tr>
   	<td>Fecha de Solicitud:</td>
   	<td> <input type="text" name="fecha_Solicitud">  Formato de fecha ano-mes-dia.
   </tr>
     <tr>
   	<td>Fecha de Validez:</td>
   	<td> <input type="text" name="fecha_Validez">  Formato de fecha ano-mes-dia.
   </tr>
    <tr>
   	<td>Usuaio:</td>
   	<td>
   	<select name="Cod_Cliente">
         <?php 
            while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
          ?>
	    <option value="<?php echo $row['Codigo'];?>"><?php echo $row['Usuario'];?></option> 
       <?php } ?>
		</select></td>
   </tr>

    

</table>

<p><input type="submit" value="Insertar Cotizacion"> 
   <input type="reset" value="borrar todo"></p>
</form>






<?php 
include ('footer.php');
?>