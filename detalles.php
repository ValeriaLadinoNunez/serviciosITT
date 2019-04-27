<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");
	$id_serv=$_REQUEST['id'];
?>
			 <br>
			  <br>
 		<div class="contenedor">

 		 <center>
	 		<table class="table table-hover" >
			  <thead>
			    <tr>
			      <th scope="col">Folio</th>
			      <th scope="col">Descripción del servicio</th>
			      <th scope="col">Nombre de quien realizó el servicio</th>
			      <th scope="col">Fecha de solicitud </th>
			      <th scope="col">Fecha de realización</th>
			      <th scope="col">Departamento que solicito el servicio</th>
			      <th scope="col">Nombre del solicitante</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta="SELECT id_servicio, desc_servicio, nombre_responsable, fecha_solicitud, 
			  		if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal, nombre_dpto, nombre_solicitante 
			  		FROM servicios where id_servicio='$id_serv'";
			  		$resultado=$conectar->query($consulta);
			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      <td><?php echo $row['id_servicio']; ?></td>
			      <td width="23%"><?php echo $row['desc_servicio']; ?></td>
			      <td><?php echo $row['nombre_responsable']; ?></td>
			      <td><?php echo $row['fecha_solicitud']; ?></td>
			      <td><?php echo $row['FechaFinal']; ?></td>
			      <td width="15%"><?php echo $row['nombre_dpto']; ?></td>
			       <td><?php echo $row['nombre_solicitante']; ?></td>
			      
			    </tr>
			    <?php
					}
				?>
			  </tbody>
			</table>
		<br>
		 <br>
		  <br>
		  <table>
		  	<thead>
			    <tr>
			      <th align="center"><h3>Evidencia</h3> </th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta2="SELECT * FROM imagenes where id_servicio='$id_serv'";
			  		$result=$conectar->query($consulta2);
			  		while($row=$result->fetch_assoc())
			  		{

			  	?>
			    <tr>
			     <td  align="center"><img src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>" width="80%"/></td> 
			    </tr>
			    <?php
					}
				?>
		  </table>	
 		</center>
 	</div>
 	
<?php
include("footer.php");
}
else 
header("location: login.php");
?>
