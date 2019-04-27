<?php
session_start();
include("conexion.php");
registrarUser($_POST['username'],$_POST['pass'],$_POST['nombre'],$_POST['puesto'],$_POST['tipoU']);
function registrarUser($username,$pass,$nombre,$puesto,$tipoU)
{
	$conectar=Conectarse();
	$agregaru='INSERT INTO usuarios VALUES  (NULL,"'.$username.'","'.$pass.'","'.ucwords($nombre).'","'.ucwords($puesto).'","'.$tipoU.'")';
	$resultu=mysqli_query($conectar,$agregaru) or die(mysqli_error($conectar));
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha agregado correctamente");
		window.location.href="sesion_administrador.php";
		</script>
	<?php
}


?>