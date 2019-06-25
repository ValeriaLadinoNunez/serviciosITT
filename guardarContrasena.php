<?php
session_start();
include("conexion.php");

//$pass=$_REQUEST['id'];
$id=$_SESSION['id_usuario'];


$pass=$_POST['newpass'];
if(isset($pass)){
	$conectar=Conectarse();
	$actualizar='UPDATE usuarios SET  pass="'.$pass.'" where id_usuario="'.$id.'"';
	$resultS=mysqli_query($conectar,$actualizar) or die(mysqli_error($conectar));

	mysqli_close($conectar);
	?>
		<script type="text/javascript">
		//alert ("Ingrese nuevamente con su nueva contraseña");
		window.location.href="login.php";
		</script>
	<?php
}
?>