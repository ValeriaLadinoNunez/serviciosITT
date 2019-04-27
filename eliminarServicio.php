<?php
session_start();
include("conexion.php");

$id_serv=$_REQUEST['id'];



	$conectar=Conectarse();

	$eliminarimg='DELETE FROM imagenes where id_servicio="'.$id_serv.'"';
	$eliminarimg=mysqli_query($conectar,$eliminarimg) or die(mysqli_error($conectar));

	$eliminarS='DELETE FROM servicios where id_servicio="'.$id_serv.'"';
	$resultS=mysqli_query($conectar,$eliminarS) or die(mysqli_error($conectar));
	
	
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha eliminado correctamente");
		window.location.href="eliminar_servicio.php";
		</script>
	<?php

?>