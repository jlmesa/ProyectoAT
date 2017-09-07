<?php

$conexion = $pdo = new mysqli("localhost","root","","acmebd" ); 

 
// Check connection
if($conexion->connect_error){
	die("Error al conectar ".$conexion->connect_error);
}		
?>
