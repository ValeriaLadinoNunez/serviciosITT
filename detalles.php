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
			      <th scope="col" style="font-size: 12px">Folio</th>
			      <th scope="col" style="font-size: 12px">Descripción del servicio</th>
			      <th scope="col" style="font-size: 12px">Responsable del servicio</th>
			      <th scope="col" style="font-size: 12px">Fecha de solicitud </th>
			      <th scope="col" style="font-size: 12px">Fecha de realización</th>
			      <th scope="col" style="font-size: 12px">Departamento que solicito el servicio</th>
			      <th scope="col" style="font-size: 12px">Nombre del solicitante</th>
			      <th scope="col" style="font-size: 12px">Observaciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta="SELECT id_servicio, desc_servicio, nombre_responsable, fecha_solicitud, 
			  		if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal, nombre_dpto, nombre_solicitante, observaciones 
			  		FROM servicios where id_servicio='$id_serv'";
			  		$resultado=$conectar->query($consulta);
			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      <td><?php echo $row['id_servicio']; ?></td>
			      <td width="25%"><?php echo $row['desc_servicio']; ?></td>
			      <td><?php echo $row['nombre_responsable']; ?></td>
			      <td width="15%" style="font-size: 12px"><?php echo $row['fecha_solicitud']; ?></td>
			      <td width="15%" style="font-size: 12px"><?php echo $row['FechaFinal']; ?></td>
			      <td ><?php echo $row['nombre_dpto']; ?></td>
			       <td><?php echo $row['nombre_solicitante']; ?></td>
			       <td><?php echo $row['observaciones']; ?></td>
			      
			    </tr>
			    <?php
					}
				?>
			  </tbody>
			</table>
		<br>
		 <br>
		  <br>
		  <h3 align="center">Evidencia</h3>
		  <table>
		  	<thead>
			    <tr>
			      <th > </th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta2="SELECT img FROM servicios where id_servicio='$id_serv'";
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
 		<input type="submit" value="Modificar"  onclick="location='modificar.php?id=<?php echo $id_serv; ?>'" class="btn btn-outline-primary">
 	</div>
 	
<?php
include("footer.php");
}
else 
header("location: login.php");
?>
