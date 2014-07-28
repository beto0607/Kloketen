$(document).ajaxError(function(e, jqxhr, settings, exception) {
    
        return; //Skip this error
    
});
        
$(document).on("click",".boton_aventura",function(){
                
                $.ajax({
                    type:"POST",
                    url:"./aventura_texto/aventuras_front.php",        
                    data:{mision:'1', name: 'Jorge Perez'},
                    success:function(response){alert("funco");},
                    error: function(){
                        $.ajax({
                            type    :"POST",
                            url:"./aventura_texto/aventuras_front.php",        
                            data:{mision:'1', name: 'Jorge Perez'},
                            success:function(response){alert("funco");}
                        });}
                });


                window.location = './aventura_texto/aventuras_front.php';
               return true;
            });
$(document).on("click",".boton_trivia",       function (){
                
                $.ajax({
                    type:"POST",
                    url:"./trivia/trivia_front.php",
                    data:{mision:'1'}
                });
                
                window.location = './trivia/trivia_front.php';
            }            );

            