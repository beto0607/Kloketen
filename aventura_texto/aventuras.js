
var id_adv=1;
$(document).ready(function(){
    $("#relato").fadeIn(1000);
    centrar();  
});
 
$(document).on("click", ".relato b",function(){
    id = $(this).attr("id");
    id_adv = id;
    if(id==="2"){
        document.getElementById("trivia").removeAttribute("hidden");
        alert("2");
        document.getElementById("trivia").setAttribute("src","../trivia/trivia_front.php");
        
        
    }else{
        $(document.getElementById("parrafo")).fadeOut(1000, "swing", 
            function(){
                $(this).fadeIn(1000);
                document.getElementById("parrafo").innerHTML = arrayJS[id];
        });
    }
});

$(document).on("click",".relato trivia",function(){
    id = $(this).attr("id");
    hacia = $(this).attr("hacia");
    $.ajax({
    type:"POST",
    url:"../trivia/trivia.php",
    data: {id: id}
    });
});