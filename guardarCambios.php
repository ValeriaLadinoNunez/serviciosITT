<?php
session_start();
include("conexion.php");

$id_serv=$_REQUEST['id'];

//s$id_servicio=$_POST['id_servicio'];
$dpto=$_POST['dpto'];
$descservicio=$_POST['descservicio'];
$id_user=$_SESSION['id_usuario'];
$fechaInicio=$_POST['fechaInicio'];
$fechaFinal=$_POST['fechaFinal'];
$respservicio=$_POST['respservicio'];
$nombresol=$_POST['nombresol'];
$obs=$_POST['obs_servicio'];
/*$nombreimg=$_POST['nombreimg'];
$img= $_FILES['img']['tmp_name'];
$imge = addslashes(file_get_contents($img));*/


	$conectar=Conectarse();
	$agregarS='UPDATE servicios SET  nombre_dpto="'.$dpto.'", desc_servicio="'.ucwords($descservicio).'",
	id_user="'.$id_user.'", fecha_solicitud="'.$fechaInicio.'", fecha_realizacion="'.$fechaFinal.'", nombre_responsable="'.ucwords($respservicio).'", nombre_solicitante="'.ucwords($nombresol).'", observaciones="'.$obs.'" where id_servicio="'.$id_serv.'"';
	$resultS=mysqli_query($conectar,$agregarS) or die(mysqli_error($conectar));
	
	/*$agregarimg='UPDATE imagenes SET  id_servicio="'.$id_servicio.'", nombre_img="'.$nombreimg.'", img="'.$imge.'" where id_servicio="'.$id_serv.'"';
	$resultimg=mysqli_query($conectar,$agregarimg) or die(mysqli_error($conectar));*/
	
	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		alert ("Se ha guardado correctamente");
		window.location.href="principal.php";
		</script>
	<?php

?>