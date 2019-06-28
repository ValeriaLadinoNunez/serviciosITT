<?php 
session_start(); 
include("conexion.php");
if(($_SESSION['nombre'])!='')
{
	include("header.php");

?>
			 <br>
			  <label>LOS RESUSTADOS SE MUESTRARAN DE ACUERDO A LA FECHA DE REALIZACIÓN DEL SERVICIO</label>
					 
					    <form class="form-inline" action="buscarmes.php" method="post">
					    	<div class="input-group form-group">
						    <div class="form-group col-md-6">
						    <label for="fechainicial" style="color:#1E355E";>Seleccione una fecha inicial &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
						    <input type="date" name="fechaInicial" min="2000-01-01"
                                  max="2050-12-31"  required>
                                     <label for="fechaFinal" style="color:#1E355E";>Seleccione una fecha límite &nbsp;&nbsp;&nbsp;&nbsp;</label><br>
						    <input type="date" name="fechaFinal" min="2000-01-01"
                                  max="2050-12-31" required>
						  </div>
 	    
						    <button class="btn btn-primary" type="submit">Mostrar</button>
						</div>
					  </form>


			  
<?php
include("footer.php");
}
else 
header("location: login.php");
?>

					    