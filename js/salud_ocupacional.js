function load(page){
     
    var fec= $("#fec").val();
     $("#loader").fadeIn('slow');
     $.ajax({
       url:'./ajax/listar_citasocu_action.php?action=ajax&page='+page+'&fec='+fec,
        beforeSend: function(objeto){
        $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
       },
       success:function(data){
         $(".outer_div").html(data).fadeIn('slow');
         $('#loader').html('');
        // $('[data-toggle="tooltip"]').tooltip({html:true}); 
         
       }
       
       
     })
    
   }