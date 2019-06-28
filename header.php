
<html>
<head> 
 	<title>Servicios ITT</title> 
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="hds.css">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 	</head> 
 	<body> 
 		<!--Cabecera-->
 		<table width="100%">
			<td><img src="tec_nm.png" width="45%"></td>
			<td align="center"><h3 size=120px>OFICINA DE CENTRO DE COMPUTO</h3></td>
			<td align="right"><img src="logo_itt.png" width="25%"></td>
		</table>
		<!-- Fin de la cabecera-->
 		<!-- Menú -->
			<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1E355E;">
			  <!-- Navbar content -->
			   <a class="navbar-brand" href="principal.php">Servicios ITT</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarText">
				    <ul class="navbar-nav">
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Registrar
				          <span class="sr-only">(current)</span>
				        </a>
				        	<?php
						 		if ($_SESSION['tipo_usuario']=='Administrador')
						 		{
						 	?>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="registrar_usuario.php">Registrar usuario</a>
				          <a class="dropdown-item" href="registrar_servicio.php">Registrar servicio</a>
				           <a class="dropdown-item" href="agregardepartamento.php">Registrar departamento</a>
				        </div>
					        <?php
							    } else
							    {
					    	?>
				    		<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          		<a class="dropdown-item" href="registrar_servicio.php">Registrar servicio</a>
				        	</div>
				    		<?php
							    }
							 ?>
				      </li>
					      <?php
								 		if ($_SESSION['tipo_usuario']=='Administrador')
								 		{
								 	?>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Reportes
					          <span class="sr-only">(current)</span>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					          <a class="dropdown-item" href="reportes.php">Generar reporte por mes</a>
					        </div>
					      </li>
					          <?php
							    } else
							    	{ }
					    		?>
				      			<?php
							 		if ($_SESSION['tipo_usuario']=='Administrador')
							 		{
							 	?>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Eliminar
				          <span class="sr-only">(current)</span>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="eliminarUsuario.php">Eliminar usuario</a>
				          <a class="dropdown-item" href="eliminar_servicio.php">Eliminar servicio</a>
				        </div>
				      </li>
				          <?php
						    } else
						    	{ }
				    		?>

				        <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          <?php
				          		$id=$_SESSION['id_usuario'];
				            	echo $_SESSION['nombre'];
				          ?>
				          <span class="sr-only">(current)</span>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesión</a>
				           <a class="dropdown-item" href="cambiarcontrasena.php">Cambiar contraseña</a>
				           <?php
							 		if ($_SESSION['tipo_usuario']=='Administrador')
							 		{
							 	?>
									<a class="dropdown-item" href="registrousuarios.php">Registro de usuarios</a>
								  <?php
						    } else
						    	{ }
				    		?>
 
				        </div>
				      </li>
				    </ul>
				  </div>

			 </nav> 		
			
			