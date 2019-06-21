<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");
$mes=$_POST['mes'];
?>
			 <br>
					 
					    <form class="form-inline" action="buscarmes.php" method="post">
					    	<label for="mes" style="color:#1E355E";>Seleccione un mes  &nbsp;&nbsp;&nbsp;&nbsp;</label>
			 				<?php
						  		$conectar=Conectarse();
						  		$consult="SELECT * FROM meses";
						  		$result=$conectar->query($consult);
						  	?>

						      <select id="mes" name="mes" class="form-control">
						      	<option value="<?php echo $mes; ?>"></option>
						      <?php	while($row2=$result->fetch_assoc())
						  		{
						  			?>
						  		
						        <option value="<?php echo $row2['id_mes']; ?>"><?php echo $row2['mes'];?>&nbsp;&nbsp; </option>
						        <?php } ?>
						      </select>
 	    
						    <button class="btn btn-primary" type="submit">Mostrar</button>
					  </form>
					  <div class="contenedor">
 			<a href="excel.php?id=<?php echo $mes; ?>">Generar archivo de EXCEL</a>
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
			  		//$mes=$_POST['mes'];
			  		$conectar=Conectarse();
			  		$consulta="SELECT id_servicio,desc_servicio,fecha_solicitud, if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal,nombre_responsable, img FROM servicios where month(fecha_realizacion)='$mes'";
			  		$resultado=$conectar->query($consulta);
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
