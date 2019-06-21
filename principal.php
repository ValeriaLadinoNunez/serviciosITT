<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");
?>
			 <br>
				 <nav class="navbar navbar-light " style="background-color: #FFFFFF;">
					  <a class="navbar-brand"></a>
					  <form class="form-inline" action="buscar.php" method="post">
					    <input class="form-control mr-sm-2" type="search" aria-label="Search" name="buscar">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					  </form>
					</nav>
			  
 		<div class="contenedor">

 		 <center>
	 		<table class="table table-hover" border="2">
			  <thead>
			    <tr align="center">
			      <th scope="col">Descripción del servicio</th>
			      <th scope="col">Fecha de solicitud</th>
			      <th scope="col">Fecha de realización</th>
			      <th scope="col" width="30%">Imagen</th>
			      <th scope="col" colspan="2">Opciones</th>
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
			      <td align="center" ><img src="data:image/jpg;base64,<?php echo base64_encode($row['img']); ?>" width="20%"/></td>
			      <th scope="row"><a href="detalles.php?id=<?php echo $row['id_servicio']; ?>">Detalles</a></th>
			      <?php
			      if ($_SESSION['tipo_usuario']!='Administrador')
						 		{} else {
					?>
			      <th scope="row"><a href="modificar.php?id=<?php echo $row['id_servicio']; ?>">Modificar</a></th>
			      <?php
			 		 }
			 		 ?>
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
