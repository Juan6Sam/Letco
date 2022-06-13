<?php	
$host = "localhost";
$user = "postgres";
$password = "yomilala06";
$db   = "postgres";
$port	  = "5432";

$conexion = pg_connect($host,$user,$password, $db,$port) or die(pg_errormessage($conexion));
if (!$conexion) {
	echo "La conexion falló";
} else{
	echo "Conexion Exitosa";
}	
?>
