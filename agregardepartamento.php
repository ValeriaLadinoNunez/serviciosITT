<?php 
session_start(); 

if(($_SESSION['nombre'])!='')

{
    include("header.php");
?>
        <div class="contenedor">

         <center>
            <div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Agregar departamentos</h3>
            </div>
            <div class="card-body">
                <form action="agregardpto.php" method="post">

                        <label>Nombre del departamento</label><br>
                        <input type="text" name="Dname"><br><br>
                        <input type="submit" value="Registar" class="btn btn-outline-primary">
                    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

        </center>
    </div>
<?php
include("footer.php");
}
else 
header("location: login.php");
?>

