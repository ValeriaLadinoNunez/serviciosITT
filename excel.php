<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=reporte de servicios.xls');
include("conexion.php");
 		// $link=Conectarse(); 
 		 $fi=$_GET['fi'];
 		 $ff=$_GET['ff'];
 		 
?>
	 		<table BORDER=2 CELLSPACING=1 CELLPADDING=1> 
	 			<thead style="background-color: green;">
	 		 <TR style="background-color: yellow;">
	 		 	  <th>Numero de folio</th>
	 		 	  <th>Descripcion del servicio</th>
			      <th >Fecha de solicitud</th>
			      <th >Fecha de realizacion</th>
			      <th >Responsable</th>
			   
	 		</thead>

	 		<?php
			  		$conectar=Conectarse();
			  		$consulta="SELECT id_servicio,desc_servicio,fecha_solicitud, if(fecha_realizacion='0000-00-00','Pendiente',fecha_realizacion) as FechaFinal,nombre_responsable FROM servicios where fecha_realizacion between '$fi' and '$ff'";
			  		$resultado=$conectar->query($consulta);
			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      <td><?php echo $row['id_servicio']; ?></td>
			      <td><?php echo $row['desc_servicio']; ?></td>
			      <td><?php echo $row['fecha_solicitud']; ?></td>
			      <td><?php echo $row['FechaFinal']; ?></td>
			      <td><?php echo $row['nombre_responsable']; ?></td>
			    </tr>
			    <?php
					}
				?>
 		    </table>
 		    <br><br>