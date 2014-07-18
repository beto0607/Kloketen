//Configuramos el evento de carga de página, se ejecuta solamente 1 vez cuando la página cargo por completo
$(document).ready(function(){
    centraVentana();
    muestraVentana();
    //Agregamos el evento "click" del div: ventanaPopup1Cerrar
    $("#triviaCerrar").click(function(){
      ocultaVentana();
    });
    //Agregamos el evento "click" del div: ventanaPopup1Fondo
    $("#triviaFondo").click(function(){
      ocultaVentana();
    });
});
 
function centraVentana() {
    //Obtenemos ancho y alto del navegador, y alto y ancho de la popUp
    var windowWidth = document.documentElement.clientWidth;
    var windowHeight = document.documentElement.clientHeight;
    var popupHeight = $("#trivia").height();
    var popupWidth = $("#trivia").width();
    //centering
    $("#trivia").css({
        "position": "absolute",
        "top": windowHeight/2-popupHeight/2,
        "left": windowWidth/2-popupWidth/2
    });
 
    //Solo se necesita para IE6
    $("#triviaFondo").css({
        "height": windowHeight
    });
}
 
function ocultaVentana() {
    $("#triviaFondo").fadeOut("slow");
    $("#trivia").fadeOut("slow");
}
 
function muestraVentana() {
    $("#triviaFondo").css({
        "opacity": "0.7"
    });
    $("#triviaFondo").fadeIn("slow");
    $("#trivia").fadeIn("slow");
}