<?php
$serverName = "PRUEBAS_CIC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"carrito_compra", "UID"=>"carrito", "PWD"=>"carrito2015");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>