<?php
$serverName = "PRUEBAS_CIC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"carrito_compra", "UID"=>"carrito", "PWD"=>"carrito2015");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$query = sqlsrv_query($conn,"SELECT * FROM Categoria");


while ($row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_ASSOC )) {
	print_r($row);
}

?>