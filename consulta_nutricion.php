<?php require_once "parte_superior.php"; ?>
<?php require_once "config/conexion.php"; ?>


    <!-- INICIO DEL CONTENIDO -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Consulta Nutricional</h4>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Datos del Paciente</h4>
                    <hr> 

                    <div class="row">
                        <div class="col-md-12">                                       
                            <h6><small>
                                <label for="num_hc" class="control-label">N° HC</label>
                                <input type="text" id="num_hc" class="form-control" value="44445550" readonly>
                            </small></h6>                                 
                        </div>

                        <div class="col-md-12">                                       
                            <h6><small>
                                <label for="nombre_completo" class="control-label">Apellidos y nombres</label>
                                <input type="text" id="nombre_completo" class="form-control" value="PEREZ DE LA VEGA JORGE LUIS" readonly>
                            </small></h6>                                       
                        </div>

                        <div class="col-md-12">                                      
                            <h6><small>
                                <label for="edad" class="control-label">Edad</label>
                                <input type="text" id="edad" class="form-control" value="33" readonly>
                            </small></h6>                                      
                        </div>

                        <div class="col-md-12">                                      
                            <h6><small>
                                <label for="sexo" class="control-label">Sexo</label>
                                <input type="text" id="sexo" class="form-control" value="MASCULINO" readonly>
                            </small></h6>
                        </div>

                        <div class="col-md-12">                                                    
                            <h6><small> 
                                <label for="des_sucursal" class="control-label">Sucursal</label>
                                <input type="text" id="des_sucursal" class="form-control" value="TACNA" readonly> 
                            </small></h6>
                        </div>

                        <div class="col-md-12">                                                    
                            <h6><small> 
                                <label for="des_especialidad" class="control-label">Especialidad</label>
                                <input type="text" id="des_especialidad" class="form-control" value="NUTRICION" readonly> 
                            </small></h6>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Consulta Nutricional</h2>                     
                    <hr> 

                    <div class="row">                        
                        <div class="col-md-4">  
                            <label for="des_especialidad" class="control-label">PESO (KG)</label>
                            <input type="text" id="des_especialidad" class="form-control" value="80">                                
                        </div>
                        
                        <div class="col-md-4"> 
                            <label for="mod_codigo" class="control-label">TALLA (M)</label>
                            <input type="text" id="mod_codigo" class="form-control" value="175">                              
                        </div>

                        <div class="col-md-4">   
                            <label for="mod_codigo" class="control-label">IMC</label>
                            <input type="text" id="mod_codigo" class="form-control" value="26.1" readonly>                               
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Diagnóstico</label>

                                <div class="input-group">
                                    <div class="table-responsive">  
                                        <table style="border: hidden" id="d_definitivo" class="col-md-12">  
                                            <tr>
                                                <td width="200"><input readonly  type="text" name="codigo_cie2[]" id="codigo_cie2" class="form-control" placeholder="CIE10"/></td>  
                                                <td width="800"><input type="text" name="diagnostico_definitivo[]" id="diagnostico_definitivo" placeholder="Diagnóstico" class="form-control" /></td>  
                                                <td><input id="id_diagnostico_d" name="id_diagnostico_d[]" type='hidden'></td>                                                    
                                            </tr>  
                                        </table>                                             
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <div class="col-md-12">  
                            <label for="mod_codigo" class="control-label">Dieta Hipocalórica</label>
                            <table class="table" style="width: 100%">
                                <thead>
                                    <th class="text-center">Alimentos</th>
                                    <th class="text-center">Cada dia</th>
                                    <th class="text-center">Tipo de Alimento</th>
                                    <th class="text-center">Preparación</th>
                                    <th class="text-center">Observación</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lacteos</td>
                                        <td><input type="text" id="text"></td>
                                        <td>Leche descremada, avena, quinua, yogurt.</td>
                                        <td><input type="text" id="text"></td>
                                        <td><input type="text" id="text"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        <br>

                        <div class="col-md-12">  
                            <label for="mod_codigo" class="control-label">Debe evitar:</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                        </div> 

                        <div class="col-md-4">  
                            <label for="mod_codigo" class="control-label">Proxima cita</label>
                            <input type="date" id="mod_codigo" class="form-control">                                
                        </div>          
                    </div>
                    <hr>

                    <div class="col-md-12 text-right">                                       
                        <button type="button" class="btn btn-danger"><i class="mdi mdi-content-save"></i> GUARDAR</button>                               
                    </div> 
                </div>
            </div>
        </div>
    </div>


<?php require_once "parte_inferior.php"; ?>
