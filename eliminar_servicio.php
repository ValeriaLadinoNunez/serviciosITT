<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");
?>
		 <br>

 		<div class="contenedor">

 		 <center>
	 		<table class="table table-hover" border="2">
			  <thead>
			    <tr align="center">
			      <th scope="col">Descripción del servicio</th>
			      <th scope="col">Fecha de solicitud</th>
			      <th scope="col">Fecha de realización</th>
			      <th scope="col" width="30%">Imagen</th>
			      <th scope="col"colspan=2 >Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta="SELECT * FROM vision_de_servicios";
			  		$resultado=$conectar->query($consulta);
			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      
			      <td><?php echo $row['desc_servicio']; ?></td>
			      <td><?php echo $row['fecha_solicitud']; ?></td>
			      <td><?php echo $row['FechaFinal']; ?></td>
			      <td  align="center"><img src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>" width="20%"/></td>
			      <td scope="row"><a href="eliminarServicio.php?id=<?php echo $row['id_servicio']; ?>"/>Eliminar</a></td>
			      <td scope="row"><a href="detalles.php?id=<?php echo $row['id_servicio']; ?>">Detalles</a></td>
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
