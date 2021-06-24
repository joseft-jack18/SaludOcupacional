<?php


$serverName = "191.98.191.120"; //serverName\instanceName
$connectionInfo = array( "Database"=>"CLTACNA_TEST_PRUEBA", "UID"=>"dialyma", "PWD"=>"P@ssw0rd1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if(!$conn){
    die("imposible conectarse: ".sqlsrv_error($conn));
}
if (@mysqli_connect_errno()) {
    die("Conexión falló: ".sqlsrv_connect_errno()." : ". sqlsrv_connect_error());
}

?>
