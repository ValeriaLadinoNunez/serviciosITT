<?php 

function Conectarse() 
{
	$user="root";
	$pas="";
	$server="localhost";
	$db="servicios";
	$conectar=mysqli_connect($server,$user,$pas,$db) or die ("error de conenexion".mysqli_error());
	$conectar->set_charset("utf8");
	return $conectar;
}
?>