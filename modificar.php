<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')

{
	include("header.php");

				$id_serv=$_REQUEST['id'];

			  		$conectar=Conectarse();
			  		$consulta="SELECT * FROM servicios where id_servicio='$id_serv'";
			  		$resultado=$conectar->query($consulta);
			  		$row1=$resultado->fetch_assoc();
			  		$consulta2="SELECT * FROM imagenes where id_servicio='$id_serv'";
			  		$result=$conectar->query($consulta2);
			  		$row2=$result->fetch_assoc();
			  		

			  
?>


 		<div class="contenedor">

 		 <center>
	 		<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Modificar servicio</h3>
			</div>
			<div class="card-body">
				<form action="guardarCambios.php?id=<?php echo $row1['id_servicio']; ?>" method="post" enctype="multipart/form-data">
					    <div class="form-group col-md-2">
					      <label for="id_servicio" style="color:#1E355E";>Número de folio</label>
						      <input type="text" class="form-control" name="id_servicio" id="descservicio" 
						      value="<?php echo $row1['id_servicio']; ?>" required
						      >
						    </div>
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="descservicio" style="color:#1E355E";>Descripcion de servicio</label>
						      <input type="text" class="form-control" name="descservicio" id="descservicio"  value="<?php echo $row1['desc_servicio']; ?>" required>
						    </div>
						 
						    <div class="form-group col-md-6">
						      <label for="dpto" style="color:#1E355E";>Departamento que lo solicita</label>
						      <select id="dpto" name="dpto" class="form-control">
						      	<option value="<?php echo $row1['nombre_dpto']; ?>"><?php echo $row1['nombre_dpto']; ?></option>
						        <option value="Servicios escolares">Servicios escolares</option>
						        <option value="Bioquimica">Bioquimica</option>
						      </select>
						    </div>
						  </div>
						 <div class="input-group form-group">
						  <div class="form-group col-md-6">
					      <label for="respservicio" style="color:#1E355E";>Responsable del servicio</label>
						      <input type="text" class="form-control" name="respservicio" id="respservicio"  value="<?php echo $row1['nombre_responsable']; ?>" required>
						    </div>
						    <div class="form-group col-md-6">
					      <label for="nombresol" style="color:#1E355E";>Nombre del solicitante</label>
						      <input type="text" class="form-control" name="nombresol" id="nombresol"  value="<?php echo $row1['nombre_solicitante']; ?>" required>
						    </div>
						  <div class="form-group col-md-6">
						    <label for="fechaInicio" style="color:#1E355E";>Fecha de solicitud</label><br>
						      <input type="date" name="fechaInicio" min="2000-01-01"
                                  max="2019-12-31"  value="<?php echo $row1['fecha_solicitud']; ?>"required>
						  </div>
						  <div class="form-group col-md-6" align="center">
						    <label for="nombreimg" style="color:#1E355E";>Evidencia</label><br>
						   
						     <img src="data:image/jpg;base64,<?php echo base64_encode($row2['img']); ?>" width="80%"/>

						  </div>
						  <div class="form-group col-md-6">
						    <label for="fechaFinal" style="color:#1E355E";>Fecha de realización</label><br>
						    <input type="date" name="fechaFinal" min="2000-01-01"
                                  max="2019-12-31"  value="<?php echo $row1['fecha_realizacion']; ?>">
						  </div>
						  
						</div>
					<div class="form-group">
						<input type="submit" value="Guardar" class="btn btn-outline-primary">
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
