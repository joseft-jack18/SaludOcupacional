<?php require_once "parte_superior.php"; ?>
<?php require_once "config/conexion.php"; ?>
<?php 

    $sucursal = $_SESSION['sucursal'];

    if($sucursal == '001' || $sucursal == '002' || $sucursal == '003'){
        $BD = 'BDV0004_PRUEBA';
        $cod_sucursal = $sucursal;  
        if($sucursal == '001'){ $des_sucursal = 'Av. Arequipa N° 1148'; }
        if($sucursal == '002'){ $des_sucursal = 'Av. Perú 3811'; }
        if($sucursal == '003'){ $des_sucursal = 'Av. Túpac Amaru 809'; }
    }
    if($sucursal == '004' || $sucursal == '005'){
        $BD = 'IOLL';
        if($sucursal == '004'){
            $cod_sucursal = '001';
            $des_sucursal = 'IOLL - LIMA';
        }
        if($sucursal == '005'){
            $cod_sucursal ='002';
            $des_sucursal = 'IOLL - CHICLAYO';
        }        
    }
    if($sucursal == '006'){
        $BD = 'ETEL';
        $cod_sucursal = '001';    
        $des_sucursal = 'ETEL';    
    }
    if($sucursal == '007'){
        $BD = 'CLOFTALMO';
        $cod_sucursal = '001';   
        $des_sucursal = 'BREÑA';     
    }
    if($sucursal == '008'){
        $BD = 'CLTACNA_TEST_PRUEBA';
        $cod_sucursal = '001';    
        $des_sucursal = 'TACNA';    
    }

    $sql_especialidad = "SELECT top 3 COD_ESPECIALIDAD, DES_ESPECIALIDAD FROM $BD..CVE_ESPECIALIDAD 
                         WHERE TIPO_ESTADO IS NULL OR TIPO_ESTADO = 'AC' ORDER BY DES_ESPECIALIDAD";
    $res_especialidad = sqlsrv_query($conn, $sql_especialidad);
    $res_especialidad2 = sqlsrv_query($conn, $sql_especialidad);

?>


    <!-- INICIO DEL CONTENIDO -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Admision - Salud Ocupacional</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Datos del Paciente</h4>

                    <div class="row">
                        <div class="col-md-8">                                       
                            <h6><small>
                                <label for="num_documento" class="control-label">N° Documento</label>
                                <input type="text" id="num_documento" class="form-control">
                            </small></h6>                                 
                        </div>

                        <div class="col-md-4">
                            <br>
                            <button type="button" class="btn btn-danger" style="width: 100%" data-toggle="modal" data-target="#nuevoPaciente"><i class="mdi mdi-account-plus"></i></button>                                     
                        </div>  

                        <div class="col-md-12">                                       
                            <h6><small>
                                <label for="nombre_completo" class="control-label">Apellidos y nombres</label>
                                <input type="text" id="nombre_completo" class="form-control" readonly>
                            </small></h6>                                       
                        </div>

                        <div class="col-md-12">                                      
                            <h6><small>
                                <label for="edad" class="control-label">Edad</label>
                                <input type="text" id="edad" class="form-control" readonly>
                            </small></h6>                                      
                        </div>

                        <div class="col-md-12">                                      
                            <h6><small>
                                <label for="sexo" class="control-label">Sexo</label>
                                <input type="text" id="sexo" class="form-control" readonly>
                            </small></h6>
                        </div>

                        <div class="col-md-12">                                                    
                            <h6><small> 
                                <label for="des_sucursal" class="control-label">Sucursal</label>
                                <input type="text" id="des_sucursal" class="form-control" value="<?php echo $des_sucursal; ?>" readonly> 
                                <input type="text" id="sucursal" class="form-control" value="<?php echo $sucursal; ?>">  
                            </small></h6>
                        </div>

                        <div class="col-md-12">                                                    
                            <h6><small> 
                                <label for="mod_codigo4" class="control-label">Especialidad</label>
                                <select class="form-control" id="especialidad">
                                    <option value="0">-- SELECCIONE --</option>
                                    <?php while($row_especialidad = sqlsrv_fetch_array($res_especialidad)){ 
                                        $cod_especialidad = $row_especialidad['COD_ESPECIALIDAD'];
                                        $des_especialidad = utf8_encode($row_especialidad['DES_ESPECIALIDAD']);
                                    ?>
                                    <option value="<?php echo $cod_especialidad; ?>"><?php echo $des_especialidad; ?></option>
                                    <?php } ?>
                                </select> 
                            </small></h6>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Datos del Paquete - Especialidades</h2>                     
                    
                    <?php while($row_es = sqlsrv_fetch_array($res_especialidad2)){ ?>
                    <hr> 
                    <div class="row">                        
                        <div class="col-md-8">                                       
                            <h6><small>
                                <label for="des_especialidad" class="control-label">Especialidad</label>
                                <input type="text" id="des_especialidad" class="form-control" readonly value="<?php echo utf8_encode($row_es['DES_ESPECIALIDAD']); ?>">
                                <input type="text" id="cod_especialidad" class="form-control" readonly value="<?php echo utf8_encode($row_es['COD_ESPECIALIDAD']); ?>">
                            </small></h6>                                 
                        </div>

                        
                        <div class="col-md-4">                                       
                            <h6><small>
                                <label for="mod_codigo" class="control-label">Fecha</label>
                                <input type="date" id="mod_codigo" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </small></h6>                                 
                        </div>

                        <?php ?>
                        <div class="col-md-8">                                       
                            <h6><small>
                                <label for="mod_codigo" class="control-label">Medico</label>
                                <input type="text" id="mod_codigo" class="form-control">
                            </small></h6>                                 
                        </div>
                        <?php ?>

                        <div class="col-md-4">                                       
                            <h6><small>
                                <label for="hora" class="control-label">Hora</label>
                                <select class="form-control" id="hora">
                                    <option value="0">-- HORA --</option>
                                </select>
                            </small></h6>                                 
                        </div>                       
                    </div>
                    <?php } ?>
                    
                    <hr>
                    <div class="col-md-12 text-right">                                       
                        <button type="button" class="btn btn-danger"><i class="mdi mdi-content-save"></i> GUARDAR</button>                               
                    </div> 
                </div>
            </div>
        </div>
    </div>


<?php require_once "parte_inferior.php"; ?>
