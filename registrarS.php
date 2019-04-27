<?php
session_start();
include("conexion.php");
//registrarServicio($_POST['id_servicio'],$_POST['pass'],$_POST['nombre'],$_POST['puesto'],$_POST['tipoU']);
$id_servicio=$_POST['id_servicio'];
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


	$conectar=Conectarse();
	$agregarS='INSERT INTO servicios VALUES  ("'.$id_servicio.'","'.$dpto.'","'.ucwords($descservicio).'",
	"'.$id_user.'","'.$fechaInicio.'","'.$fechaFinal.'","'.ucwords($respservicio).'","'.ucwords($nombresol).'")';
	$resultS=mysqli_query($conectar,$agregarS) or die(mysqli_error($conectar));
	
	$agregarimg='INSERT INTO imagenes VALUES  (NULL,"'.$id_servicio.'","'.$nombreimg.'","'.$imge.'")';
	$resultimg=mysqli_query($conectar,$agregarimg) or die(mysqli_error($conectar));
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha agregado correctamente");
		window.location.href="principal.php";
		</script>
	<?php

?>