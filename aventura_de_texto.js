/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var id_adv=1;
var timeout;
function timer() {
    timeout = window.setTimeout(animarMascara, 0);
}

function animarMascara(){}

$(document).on("click", ".relato b",function(){
    id = $(this).attr("id");
    id_adv = id;
    $(document.getElementById("parrafo")).fadeOut(1000, "swing", 
        function(){
            $(this).fadeIn(1000);
            document.getElementById("parrafo").innerHTML = arrayJS[id];
    });
    if(id>0){
        var element = document.createElement("div");
        element.setAttribute("id","trivia");
        element.setAttribute("src", "./trivia.js");
        element.setAttribute("class","trivia" );
        var aux = document.createTextNode("Hola...");
        element.appendChild(aux);
        $(document.getElementById("contenido")).append(element);
        
        element = document.createElement("div");
        element.setAttribute("id","triviaFondo");
        element.setAttribute("src", "./trivia.js");
        $(document.getElementById("contenido")).append(element);
    }
});
