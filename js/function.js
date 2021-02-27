$(document).ready(function() {

  

    jQuery('#submit1').on( 'click', function(event) {
        var x = $("#v_id").val();
        var y = $("#id_user").val();
        var db = $("#date_debut").val();
        var df = $("#date_fin").val();
        var me = $("#message").val();

   
   
        $.ajax({
         "url":"/salle/ajax/ajax_script.php",
         "method":"get",
         "data":{id_anonnce:x, id_user : y,date_debut : db,date_fin: df,message: me},
         
         success:function(reponce){
            
    
            if(reponce.trim() == "erreur_date_debut"){
                $(".message_erreur").empty().html('<div class="message_err">il faut selectionner la date de debut</div>'); 
            }
            if(reponce.trim() == "erreur_date_fin"){
                $(".message_erreur").empty().html('<div class="message_err">il faut selectionner la date de fin</div>'); 
            }
            if(reponce.trim() == "ok"){
              $(".probootstrap-form").hide();
              $(".panel_").html('<div class="message_ok">Votre demande a été envoyer avec succées</div>');
          }
         }
           });
       


    });



    $(".activer").click(function(evt) {
      var id_m  =   $(evt.target).next().val();

      jQuery(this).parent().parent().remove();

      $.ajax({
        "url":"/salle/ajax/ajax_script1.php",
        "method":"get",
        "data":{id1:id_m},
        
        success:function(reponce){
           
   
        }
          });
      
       
    });

    
    $(".supprimer").click(function(evt) {
      var id_m  =   $(evt.target).next().val();

      jQuery(this).parent().parent().remove();

      $.ajax({
        "url":"/salle/ajax/ajax_script2.php",
        "method":"get",
        "data":{id1:id_m},
        
        success:function(reponce){
           
   
        }
          });
      
       
    });


    $("#submit").click(function(evt) {
      
      var id_m  =   $(evt.target).next().val();

      var x = $("#titre").val();
      var y = $("#file").val();
      var a = $("#description").val();
      var o = $("#prix").val();

 

      $.ajax({
        "url":"/salle/ajax/ajax_add_room.php",
        "method":"get",
        "data":{titre:x,image : y,description : a,prix :o },
        
        success:function(reponce){

         
          
           if(reponce.trim() === 'ok'){
            window.location = '/salle/all_room.php';

           }
   
        }
          });
      
       
    });

    $("#update_room").click(function(evt) {
      
      var id_m  =   $(evt.target).next().val();

      var x = $("#titre").val();
      var e = $("#id_room").val();
      var y = $("#file").val();
      var i = $("#img_val").val();
      var a = $("#description").val();
      var o = $("#prix").val();

 

      $.ajax({
        "url":"/salle/ajax/ajax_update_room.php",
        "method":"get",
        "data":{titre:x,image : y,description : a,prix :o ,img_val :i,id_room : e  },
        
        success:function(reponce){

         
          
           if(reponce.trim() === 'ok'){
            window.location = '/salle/all_room.php';

           }
   
        }
          });
      
       
    });



    $(".delete_room").click(function(evt) {
      var id_m  =   $(evt.target).next().val();


      jQuery(this).parent().parent().remove();

      $.ajax({
        "url":"/salle/ajax/ajax_delete_room.php",
        "method":"get",
        "data":{id:id_m},
        
        success:function(reponce){
           
   
        }
          });
      
       
    });


   


    
});