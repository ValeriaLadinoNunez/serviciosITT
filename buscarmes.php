<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");
$fechaI=$_POST['fechaInicial'];
$fechaF=$_POST['fechaFinal'];
?>
			 <br>
					 
					    <form class="form-inline" action="buscarmes.php" method="post">
					    	<div class="input-group form-group">
						    <div class="form-group col-md-6">
						    <label for="fechainicial" style="color:#1E355E";>Seleccione una fecha inicial &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
						    <input type="date" name="fechaInicial" min="2000-01-01"
                                  max="2050-12-31" required>
                                     <label for="fechaFinal" style="color:#1E355E";>Seleccione una fecha límite &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
						    <input type="date" name="fechaFinal" min="2000-01-01"
                                  max="2050-12-31" required>
						  </div>
 	    
						    <button class="btn btn-primary" type="submit">Mostrar</button>
						</div>
					  </form>
					  <div class="contenedor">
					  	<?php 
					  		$conectar=Conectarse();
					  		$consulta="SELECT id_servicio,desc_servicio,fecha_solicitud, if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal,nombre_responsable, img FROM servicios where fecha_realizacion between '$fechaI' and '$fechaF'";
					  		$resultado=$conectar->query($consulta);
					  		$numero_filas = mysqli_num_rows($resultado);
					  		if ($numero_filas!=0) {
					  		
					  		
					  	?>
 			<a href="excel.php?fi=<?php echo $fechaI; ?>&ff=<?php echo $fechaF; ?>">Generar archivo de EXCEL</a>
 		 <center>
	 		<table class="table table-hover" border="2">
			  <thead>
			    <tr align="center">
			      <th scope="col">Descripción del servicio</th>
			      <th scope="col">Fecha de solicitud</th>
			      <th scope="col">Fecha de realización</th>
			      <th scope="col">Responsable</th>
			      <th scope="col" width="30%">Imagen</th>
			     
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      
			      <td><?php echo $row['desc_servicio']; ?></td>
			      <td><?php echo $row['fecha_solicitud']; ?></td>
			      <td><?php echo $row['FechaFinal']; ?></td>
			      <td><?php echo $row['nombre_responsable']; ?></td>
			      <td align="center" ><img src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>" width="20%"/></td>
			    </tr>
			    <?php
					}
				}
				else { echo "No se encontraron resultados  ";}

				?>
			  </tbody>
			</table>

 		</center>
 	</div>
			  
<?php
include("footer.php");
}
else 
header("location: login.php");
?>
