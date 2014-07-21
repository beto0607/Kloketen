/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var id_adv=1;
function centrar(){
        var ancho = ($("#relatos").find(".parrafo").width() / 2);
        var altura = ($("#relatos").find(".parrafo").height() / 2);
        $("#relatos").css({"margin-top": -altura, "margin-left": -ancho});		
}
$(document).ready(function(){
    $("#relatos").fadeIn(1000);
    centrar();  
});

$(document).on("click", ".relato b",function(){
    id = $(this).attr("id");
    id_adv = id;
    $(document.getElementById("parrafo")).fadeOut(1000, "swing", 
        function(){
            $(this).fadeIn(1000);
            document.getElementById("parrafo").innerHTML = arrayJS[id];
    });

});

$(document).on("click",".relato trivia",function(){
    id = $(this).attr("id");
    hacia = $(this).attr("hacia");
    $.ajax({
    type:"POST",
    url:"trivia.php",
    data: {id: id,},
    });
});