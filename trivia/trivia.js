/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).on("click",".btn",function(){
    var btn_val = $(this).attr("value");
    var radios = document.getElementsByName("respuesta"+btn_val);
    for(var i = 0; i < radios.length;i++){

        if(radios[i].checked){
            var state=-1;
            var idt = $(document.getElementById("trivia_"+btn_val)).attr("value");
            if(radios[i].value==1){state=1;}
            $.ajax({
                url: "cambiar_estado.php",
                type: "POST",
                data: {estado: state, idTrivia: idt, dif: btn_val[0]},
                success:function(aux){
                    alert(aux);
                    jQuery("#"+btn_val).load("div_facil.php");
                }
            });
        }
        
    }
    
    alert(jQuery("#"+btn_val).attr("value"));
    
    
});


