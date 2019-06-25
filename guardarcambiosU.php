<?php
session_start();
include("conexion.php");

$id=$_REQUEST['id'];

$user=$_POST['username'];
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$cargo=$_POST['puesto'];
$tipo_usuario=$_POST['tipoU'];




	$conectar=Conectarse();
	$agregarU='UPDATE usuarios SET  user="'.$user.'", pass="'.$pass.'",
	nombre="'.ucwords($nombre).'", cargo="'.ucwords($cargo).'", tipo_usuario="'.$tipo_usuario.'" where id_usuario="'.$id.'"';
	$resultS=mysqli_query($conectar,$agregarU) or die(mysqli_error($conectar));
	
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha guardado correctamente");
		window.location.href="registrousuarios.php";
		</script>
	<?php

?>