<?php 
//variables
$servidor="localhost";
$usuario="root";
$clave="";
$db="gucci";

//crear conexion
$con=mysqli_connect($servidor,$usuario,$clave,$db);
if (!$con) {
	die("Error en la conexion..".mysqli_connect_error());
}
?>