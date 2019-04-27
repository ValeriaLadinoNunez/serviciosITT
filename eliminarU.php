<?php
session_start();
include("conexion.php");

$id=$_REQUEST['id'];



	$conectar=Conectarse();

	$eliminarimg='DELETE FROM usuarios where id_usuario="'.$id.'"';
	$eliminarimg=mysqli_query($conectar,$eliminarimg) or die(mysqli_error($conectar));
	
	
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha eliminado correctamente");
		window.location.href="eliminarUsuario.php";
		</script>
	<?php

?>