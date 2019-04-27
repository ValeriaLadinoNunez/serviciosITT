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
			      <th scope="col">Nombre de usuario</th>
			      <th scope="col">Contraseña</th>
			      <th scope="col">Nombre completo</th>
			      <th scope="col" width="30%">Puesto </th>
			      <th scope="col" width="30%">Tipo de usuario</th>
			      <th scope="col" >Eliminar</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$conectar=Conectarse();
			  		$consulta="SELECT * FROM usuarios";
			  		$resultado=$conectar->query($consulta);
			  		while($row=$resultado->fetch_assoc())
			  		{

			  	?>
			    <tr>
			      
			      <td><?php echo $row['user']; ?></td>
			      <td><?php echo $row['pass']; ?></td>
			      <td><?php echo $row['nombre']; ?></td>
			      <td><?php echo $row['cargo']; ?></td>
			      <td><?php echo $row['tipo_usuario']; ?></td>
			      <td scope="row"><a href="eliminarU.php?id=<?php echo $row['id_servicio']; ?>">Eliminar</a></td>
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
