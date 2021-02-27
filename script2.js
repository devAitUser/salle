$(document).ready(function(){

    $("#file").on('change', function(){ 
      var x=  $("#file").val();
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        console.log(x);

        $.ajax({
            url: 'ajax.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    $("#img").attr("src",response); 
                    $(".preview img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});