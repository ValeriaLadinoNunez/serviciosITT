<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')

{
	include("header.php");
	$id=$_SESSION['id_usuario'];

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script language="JavaScript"> 
function comprobarClave(){ 
   if (f1.newpass.value == ""){
alert("Complete la Contraseña");
f1.newpass.focus();
return (false);
}
if (f1.newpass.value.length < 4){
alert("La contraseña debe ser mayor de 4 digitos")
f1.newpass.focus();
f1.pass.value="";
return (false);
}

if (f1.pass.value == ""){
alert("Debe confirmar la contraseña");
f1.pass.focus();
return (false);
} 

if (f1.newpass.value != f1.pass.value){
alert("La contraseña confirmada no concuerda con la contraseña escrita");
f1.pass.focus();
f1.pass.value="";
return (false);

} 
if (f1.newpass.value == f1.pass.value){
alert("contraseña confirmada ");
f1.pass.focus();
return (true);}
}
</script> 	
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("newpass");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>

 		<div class="contenedor">

 		 <center>
	 		<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Cambiar contraseña</h3>
			</div>
			<div class="card-body">
				<form name="f1" action="guardarContrasena.php" method="post" enctype="multipart/form-data">
					<label for="newpass" style="color:#1E355E";>Escriba su nueva contraseña</label>
					 <div class="input-group">
					       <input type="password" class="form-control" name="newpass" id="newpass"  required>
					      <div class="input-group-append">
					            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
					          </div>
					    </div>
						  
						   <label for="pass" style="color:#1E355E";>Escriba nuevamente la contraseña</label>
						    <div class="input-group">
						      <input type="password" class="form-control" name="pass" id="pass"  required>
						     
						    </div>

							  	<br><br>


					<div class="form-group">
						<input type="submit" name="guardar" value="Guardar" class="btn btn-outline-primary" onClick="comprobarClave()">
					</div>

			</div>
						  
				</form>
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
