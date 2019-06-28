<?php 
session_start(); 
include("conexion.php");

$dpto=$_POST['Dname'];
    $conectar=Conectarse();
    $agregarD='INSERT INTO departamentos VALUES  (NULL,"'.ucwords($dpto).'")';
    $resultu=mysqli_query($conectar,$agregarD) or die(mysqli_error($conectar));
    
    mysqli_close($conectar);
    	?>
		<script type="text/javascript">
		alert ("Se ha agregado correctamente");
		window.location.href="principal.php";
		</script>
	<?php

 ?>
