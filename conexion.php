<?php
$serverName = "PRUEBAS_CIC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"carrito", "UID"=>"carrito", "PWD"=>"carrito2015");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>