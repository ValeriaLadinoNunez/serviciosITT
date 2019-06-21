<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");

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
						      <?php	while($row2=$result->fetch_assoc())
						  		{
						  			?>
						        <option value="<?php echo $row2['id_mes']; ?>"><?php echo $row2['mes'];?> &nbsp;&nbsp;</option>
						        <?php } ?>
						      </select>
 	    
						    <button class="btn btn-primary" type="submit">Mostrar</button>
					  </form>

			  
<?php
include("footer.php");
}
else 
header("location: login.php");
?>
