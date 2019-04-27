<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')

{
	include("header.php");
?>
 		<div class="contenedor">

 		 <center>
	 		<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro de usuarios</h3>
			</div>
			<div class="card-body">
				<form action="registrarU.php" method="post">
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="username" style="color:#1E355E";>Nombre de usuario</label>
						      <input type="text" class="form-control" name="username" id="username" placeholder="admin" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="pass" style="color:#1E355E";>Contraseña</label>
						      <input type="password" class="form-control" id="pass" placeholder="123" name="pass" required>
						    </div>
						  </div>
						  <div class="input-group form-group">
						  <div class="form-group col-md-6">
						    <label for="name" style="color:#1E355E";>Nombre completo</label>
						    <input type="text" class="form-control" id="name" placeholder="Jose Juarez" name="nombre" required>
						  </div>
						  <div class="form-group col-md-6">
						    <label for="puesto" style="color:#1E355E";>Puesto</label>
						    <input type="text" class="form-control" id="puesto" placeholder="Jefe de departamento" name="puesto" required>
						  </div>
						    <div class="form-group col-md-6">
						      <label for="tipo_usuario" style="color:#1E355E";>Tipo de usuario</label>
						      <select id="tipo_usuario" name="tipoU" class="form-control">
						        <option value="A">Administrador</option>
						        <option value="C">Capturista</option>
						      </select>
						    </div>
						    </div>
						 <div class="form-group">
						<input type="submit" value="Registar" class="btn btn-outline-primary">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<!--<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>-->
			</div>
		</div>
	</div>
</div>

 		</center>
 	</div>
<?php
include("footer.php");
}
else 
header("location: login.php");
?>
