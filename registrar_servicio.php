<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')

{
	include("header.php");
				  	$conectar=Conectarse();
			  		$consulta="SELECT * FROM departamentos";
			  		$resultado=$conectar->query($consulta);
			  		
?>
 		<div class="contenedor">

 		 <center>
	 		<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro de servicios</h3>
			</div>
			<div class="card-body">
				<form action="registrarS.php" method="post" enctype="multipart/form-data">
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="descservicio" style="color:#1E355E";>Descripcion de servicio</label>
						      <input type="text" class="form-control" name="descservicio" id="descservicio" placeholder="Instalacion de SO Windows 10" required>
						    </div>
						 
						    <div class="form-group col-md-6">
						      <label for="dpto" style="color:#1E355E";>Departamento que lo solicita</label>
						      <select id="dpto" name="dpto" class="form-control">
						      	<?php
						      		while ($row=$resultado->fetch_assoc()) {
						      			
						      		
						      	?>
								<option value="<?php echo $row['departamento']; ?>"><?php echo $row['departamento']; ?></option>	
							<?php } ?>
								</select>
						    </div>
						  </div>
						 <div class="input-group form-group">
						  <div class="form-group col-md-6">
					      <label for="respservicio" style="color:#1E355E";>Responsable del servicio</label>
						      <input type="text" class="form-control" name="respservicio" id="respservicio" placeholder="" required>
						    </div>
						    <div class="form-group col-md-6">
					      <label for="nombresol" style="color:#1E355E";>Nombre del solicitante</label>
						      <input type="text" class="form-control" name="nombresol" id="nombresol" placeholder="" required>
						    </div>
						  <div class="form-group col-md-6">
						    <label for="fechaInicio" style="color:#1E355E";>Fecha de solicitud</label><br>
						      <input type="date" name="fechaInicio" min="2000-01-01"
                                  max="2050-12-31" required>
						  </div>
						  <div class="form-group col-md-6" align="center">
						    <label for="nombreimg" style="color:#1E355E";>Evidencia</label><br>
						    <input type="text" name="nombreimg" placeholder="Nombre del archivo" required>
						    <input type="file" name="img" required>
						  </div>
						  <div class="form-group col-md-6">
						    <label for="fechaFinal" style="color:#1E355E";>Fecha de realización</label><br>
						    <input type="date" name="fechaFinal" min="2000-01-01"
                                  max="2050-12-31" >
						  </div>

					    <div class="form-group col-md-6">
					      <label for="obs_servicio" style="color:#1E355E";>Observaciones</label>
						      <input type="text" class="form-control" name="obs_servicio" id="obs_servicio" >
						    </div>
						  
						</div>
					<div class="form-group">
						<input type="submit" value="Registar" class="btn btn-outline-primary">
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
