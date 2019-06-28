<?php
session_start();
include("conexion.php");

$dpto=$_POST['dpto'];
$descservicio=$_POST['descservicio'];
$id_user=$_SESSION['id_usuario'];
$fechaInicio=$_POST['fechaInicio'];
$fechaFinal=$_POST['fechaFinal'];
$respservicio=$_POST['respservicio'];
$nombresol=$_POST['nombresol'];
$nombreimg=$_POST['nombreimg'];
$img= $_FILES['img']['tmp_name'];
$imge = addslashes(file_get_contents($img));
$obs=$_POST['obs_servicio'];


	$conectar=Conectarse();
	$agregarS='INSERT INTO servicios VALUES  (NULL,"'.$dpto.'","'.ucwords($descservicio).'",
	"'.$id_user.'","'.$fechaInicio.'","'.$fechaFinal.'","'.ucwords($respservicio).'","'.ucwords($nombresol).'","'.$obs.'","'.$nombreimg.'","'.$imge.'")';
	$resultS=mysqli_query($conectar,$agregarS) or die(mysqli_error($conectar));
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha agregado correctamente");
		window.location.href="principal.php";
		</script>
	<?php

?>