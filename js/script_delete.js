$(document).ready(function() {






  
      var id_m  =   $("#v_id").val();


     

      $.ajax({
        "url":"/salle/ajax/ajax_check_room.php",
        "method":"get",
        "data":{id:id_m},
        
        success:function(reponce){
        
          if(reponce.trim() === 'ok'){

            window.location =  window.location.href;
          }
           
   
        }
          });
      
       



   


    
});