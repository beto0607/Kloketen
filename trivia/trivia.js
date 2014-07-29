/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).on("click",".btn",function(){
    
    var aux = document.getElementsByName("respuesta");
    
    var r;
    for(var i=0; i<aux.length;i++){
        if(aux[i].checked){
           r=i; 
        }
    }
    
    aux = document.getElementById("modal-body");
    
    if(rc== r+1){
        aux.innerHTML = "<h4>¡Correcto!</h4>";
    }else{
        aux.innerHTML = "<h4>¡Incorreto!</h4>";
    }

});


$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});