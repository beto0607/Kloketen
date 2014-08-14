$(document).ajaxError(function(e, jqxhr, settings, exception) {
    
        return; //Skip this error
    
});
        
$(document).on("click",".boton_aventura",function(){
    //window.location.href = './aventura_texto/aventuras_front.php?name=Jorge Perez&mision=Arjé';
    $.ajax({
        type: 'POST', 
        data: {name:"Juan",mision:"caca"},
        url: "./aventura_texto/aventuras_front.php",
        async: false,
        complete: function(xhr, status){
            $('#header').html(xht.responseText);
        }
    });
    
});
$(document).on("click",".boton_trivia",       function (){
    window.location.href = './trivia/trivia_front.php?mision=1';
});

            