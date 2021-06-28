<?php require_once "parte_superior.php";?>


<div class = "row" >

    <div class = "col-md-3">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">DATOS DEL PACIENTE</h4>



    </div>
    </div>
    </div>



    <div class="col-md-9">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title text-center">CUESTIONARIO DE ESPIROMETRÍA</h4>
 
        <div class="row p-20">


            <!-- Pregunta 1 -->

            <div class="col-md-12">
                <div class = "form-group text-left">
                <label class="control-label"><strong><h4>PREGUNTAS PARA TODOS LOS CANDIDATOS A ESPIROMETRÍA (RELACIONADAS A CRITERIOS DE EXCLUSIÓN)</h4></strong></label>
                </div>
            </div>

            <!-- Pregunta 1.1 -->

            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">1.- ¿Tuvo desprendimiento de la retina o una operación (cirugía) de los ojos, tórax ó abdomen en los últimos 3 meses?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_11" id="11si" value = "11si">
                    <label class="custom-control-label" for="11si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_11" id="11no" value = "11no">
                    <label class="custom-control-label" for="11no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>   
            

            <!-- Pregunta 1.2 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">2.- ¿Ha tenido algún ataque cardíaco o infarto al corazón en los últimos 3 meses?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_12" id="12si" value = "12si">
                    <label class="custom-control-label" for="12si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_12" id="12no" value = "12no">
                    <label class="custom-control-label" for="12no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 1.3 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">3.- ¿Ha estado hospitalizado(a) por cualquier otro problema del corazón en los últimos 3 meses?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_13" id="13si" value = "13si">
                    <label class="custom-control-label" for="13si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_13" id="13no" value = "13no">
                    <label class="custom-control-label" for="13no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 1.4 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">4.- ¿Está usando medicamentos para la tuberculosis, en este momento?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_14" id="14si" value = "14si">
                    <label class="custom-control-label" for="14si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_14" id="14no" value = "14no">
                    <label class="custom-control-label" for="14no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  

            <!-- Pregunta 1.5 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">5.- En caso de ser mujer: ¿Esta usted embarazada actualmente?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_15" id="15si" value = "15si">
                    <label class="custom-control-label" for="15si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_15" id="15no" value = "15no">
                    <label class="custom-control-label" for="15no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>







            <!-- Parte 2 de 1-->

            <div class="col-md-12">
                <div class = "form-group text-left">
                <label class="control-label"><strong><h4>PARA SER LLENADO POR EL PROFESIONAL QUE REALIZA LA PRUEBA</h4></strong></label>
                </div>
            </div>

            <!-- Pregunta 1.6 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">6.- HEMOPTISIS</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_16" id="16si" value = "16si">
                    <label class="custom-control-label" for="16si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_16" id="16no" value = "16no">
                    <label class="custom-control-label" for="16no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>   
            

            <!-- Pregunta 1.12 -->
            
            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">12.- INFARTO RECIENTE</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_112" id="112si" value = "112si">
                    <label class="custom-control-label" for="112si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_112" id="112no" value = "112no">
                    <label class="custom-control-label" for="112no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  

            <!-- Pregunta 1.7 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">7.- PNEUMOTORAX</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_17" id="17si" value = "17si">
                    <label class="custom-control-label" for="17si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_17" id="17no" value = "17no">
                    <label class="custom-control-label" for="17no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>   


            <!-- Pregunta 1.13 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">13.- INESTABILIDAD CV</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_113" id="113si" value = "113si">
                    <label class="custom-control-label" for="113si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_113" id="113no" value = "113no">
                    <label class="custom-control-label" for="113no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div> 


            <!-- Pregunta 1.8 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">8.- TRAQUEOSTOMIA</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_18" id="18si" value = "18si">
                    <label class="custom-control-label" for="18si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_18" id="17no" value = "18no">
                    <label class="custom-control-label" for="18no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 1.14 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">14.- FIEBRE, NAUSEA, VÓMITO</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_114" id="114si" value = "114si">
                    <label class="custom-control-label" for="114si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_114" id="114no" value = "114no">
                    <label class="custom-control-label" for="114no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div> 


            <!-- Pregunta 1.9 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">9.- SONDA PLEURAL</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_19" id="19si" value = "19si">
                    <label class="custom-control-label" for="18si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_19" id="19no" value = "19no">
                    <label class="custom-control-label" for="19no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  

            <!-- Pregunta 1.15 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">15.- EMBARAZO AVANZADO</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_115" id="115si" value = "115si">
                    <label class="custom-control-label" for="115si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_115" id="115no" value = "115no">
                    <label class="custom-control-label" for="115no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div> 


            <!-- Pregunta 1.10 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">10.- ANEURISMAS CEREBRAL, ABDOMEN, TORAX</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_110" id="110si" value = "110si">
                    <label class="custom-control-label" for="110si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_110" id="110no" value = "110no">
                    <label class="custom-control-label" for="110no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  

            <!-- Pregunta 1.16-->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">16.- EMBARAZO COMPLICADO</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_116" id="116si" value = "116si">
                    <label class="custom-control-label" for="116si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_116" id="116no" value = "116no">
                    <label class="custom-control-label" for="116no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 1.11 -->

            <div class="col-md-4">
                <div class = "form-group text-left">
                <label class="control-label">11.- EMBOLIA PULMONAR</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_111" id="111si" value = "111si">
                    <label class="custom-control-label" for="111si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_111" id="111no" value = "111no">
                    <label class="custom-control-label" for="111no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div> 

























            <!-- Pregunta 3 -->

            <div class="col-md-12">
                <div class = "form-group text-left">
                <label class="control-label"><strong><h4>PREGUNTAS PARA TODOS LOS ENTREVISTADOS QUE NO TIENEN LOS CRITERIOS DE EXCLUSIÓN Y QUE POR LO TANTO DEBEN HACER LA ESPIROMETRÍA</h4></strong></label>
                </div>
            </div>

            <!-- Pregunta 3.1 -->

            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">1.- ¿Tuvo una infección respiratoria (resfriado), en las últimas 3 semanas?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_31" id="31si" value = "31si">
                    <label class="custom-control-label" for="31si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_31" id="31no" value = "31no">
                    <label class="custom-control-label" for="31no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>   
            

            <!-- Pregunta 3.2 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">2.- ¿Tuvo una infección en el oído en las ÚLTIMAS 3 SEMANAS?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_32" id="32si" value = "32si">
                    <label class="custom-control-label" for="32si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_32" id="32no" value = "32no">
                    <label class="custom-control-label" for="32no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 3.3 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">3.-  ¿Uso aerosoles (Sprays inhalados) o nebulizaciones con broncodilatadores, toma en las últimas 3 horas?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_33" id="33si" value = "33si">
                    <label class="custom-control-label" for="33si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_33" id="33no" value = "33no">
                    <label class="custom-control-label" for="33no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  


            <!-- Pregunta 3.4 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">4.- ¿Ha usado algún medicamento broncodilatador en la úlimas 8 horas?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_34" id="34si" value = "34si">
                    <label class="custom-control-label" for="34si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_34" id="34no" value = "34no">
                    <label class="custom-control-label" for="34no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>  

            <!-- Pregunta 3.5 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">5.- ¿Fumó (cualquier tipo de cigarro), en las últimas 2 horas?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_35" id="35si" value = "35si">
                    <label class="custom-control-label" for="35si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_35" id="35no" value = "35no">
                    <label class="custom-control-label" for="35no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>


            <!-- Pregunta 3.6 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">6.- ¿Realizó algún ejercicio físico fuerte(como gimnasia,caminata o trotar), en la última hora?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_36" id="36si" value = "36si">
                    <label class="custom-control-label" for="36si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_36" id="36no" value = "36no">
                    <label class="custom-control-label" for="36no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>


            <!-- Pregunta 3.7 -->
            
            <div class="col-md-10">
                <div class = "form-group text-left">
                <label class="control-label">7.- ¿Comió en la última hora?</label>
                </div>
            </div>

            <div class="col-md-2">   

                <div class="row">

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_37" id="37si" value = "37si">
                    <label class="custom-control-label" for="37si">SI</label>
                    </div>  
                    </div> 

                    <div class="col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="esp_37" id="37no" value = "37no">
                    <label class="custom-control-label" for="37no">NO</label>
                    </div>
                    </div>

                </div>
    
            </div>
















        </div>


    </div>
    </div>
    </div>

</div>



<?php require_once "parte_inferior.php"?>