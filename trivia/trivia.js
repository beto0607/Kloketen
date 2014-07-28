/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on("click","#btn_responder",function(){
    var aux = document.getElementsByName("respuesta");
    var r;
    for(var i=0; i<aux.length;i++){
        if(aux[i].checked){
           r=i; 
        }
    }
    
    $.ajax({
        type:"POST",
        url:"../trivia/trivia.php",
        data: {respondio:r}
    })

});


$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});