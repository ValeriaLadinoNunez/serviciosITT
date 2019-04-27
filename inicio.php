<?php
session_start();
include("conexion.php");
$conectar=Conectarse();
	$username=$_POST['user'];
	$userpass=$_POST['pass'];

	if(isset($username) and isset($userpass))
	{
		$consulta='SELECT id_usuario, tipo_usuario FROM usuarios WHERE user="'.$username.'" AND pass="'.$userpass.'"';
			$result=mysqli_query($conectar,$consulta);
			$filas=mysqli_num_rows($result);
			$sql=mysqli_fetch_array($result);
		if($filas==1)
		{
			$_SESSION['id_usuario']=$sql['id_usuario'];
			$_SESSION['tipo_usuario']=$sql['tipo_usuario'];
			if($sql['tipo_usuario']=='A')
			{
				$nombreusuario='SELECT  id_usuario,nombre FROM usuarios WHERE user="'.$username.'"';
				$consultarnombre=mysqli_query($conectar,$nombreusuario);
				$obtenernombre=mysqli_fetch_array($consultarnombre);
				$_SESSION['id_usuario']=$obtenernombre['id_usuario'];
				$_SESSION['nombre']=$obtenernombre['nombre'];
				header("location:sesion_administrador.php");
			}
			else
			{
				$nombreusuario='SELECT  id_usuario,nombre FROM usuarios WHERE user="'.$username.'"';
				$consultarnombre=mysqli_query($conectar,$nombreusuario);
				$obtenernombre=mysqli_fetch_array($consultarnombre);
				$_SESSION['id_usuario']=$obtenernombre['id_usuario'];
				$_SESSION['nombre']=$obtenernombre['nombre'];
				header("location:sesion_capturista.php");
			}
		}
		else
		{
			header("location:ErrorLogin.php");
			/*echo '<script type="text/javascript">
		        alert("Usuario o contraseña incorrectos");
		        window.location.href="loging.php";
		        </script>';*/
		}
	}
	else
	{
			header("location:login.php");
	}

mysqli_free_result($result);
mysqli_close($conectar);

?>
