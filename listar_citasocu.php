<?php 
require_once "parte_superior.php";

//session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) 
{
header("location: login.php");
exit;
}		
?>
    

	<div class="card">
        <div class="card-body">
			<h2 class="card-title text-center">Lista de Citas - Salud Ocupacional</h2>  

            <div class = "row p-20">   

                <div class="col-md-3">
                    <div class="form-group">
                    <label class="control-label">Sucursal</label>
                    <select class="select2 form-control custom-select" id="sucursal" onchange="load(1)" >                   
                        <option value="001">Av. Arequipa N° 1148</option>
                        <option value="002">Av. Perú 3811</option>
                        <option value="003">Av. Túpac Amaru 809</option>
                        <option value="004">IOLL - LIMA</option>
                        <option value="005">IOLL - CHICLAYO</option>
                        <option value="006">ETEL</option>
                        <option value="007">BREÑA</option>
                        <option value="008">TACNA</option>
                    </select>
                    </div>
                </div>   

                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label">Desde</label>
                            <input type="date" class="form-control" name="fec" id="fec" value="<?php echo date("Y-m-d");?>" onchange='load(1);'>
                        </div>
                    </div>
                </div> 

                <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label">Hasta</label>
                            <input type="date" class="form-control" name="fec" id="fec" value="<?php echo date("Y-m-d");?>" onchange='load(1);'>
                        </div>
                    </div>
                </div> 

            </div>   


            <div id="resultados"></div>
			<div class='outer_div'></div> 


        </div>
	</div>




<?php require_once "parte_inferior.php"?>

<script type="text/javascript" src="js/VentanaCentrada.js"></script>
<script type="text/javascript" src="js/salud_ocupacional.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/jquery-ui-git.css">
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
