<?php
    $conexion = mysql_connect("localhost","root","asd45asd"); 
    mysql_select_db("MisionTrivia", $conexion);
    $preg = mysql_real_escape_string(filter_input(INPUT_GET, "pregunta"));
    //$sql = "INSERT INTO Trivia(pregunta,dificultad,Mision_idMision,estado)VALUES('$aux',3,1,0)";
    //echo $sql."<br>";
    
    for ($i = 1; $i <= filter_input(INPUT_GET, "cant"); $i++){
        
        $aux = filter_input(INPUT_GET, "r$i");
        $aux = mysql_real_escape_string($aux);
        $corr = "FALSE";
        if(filter_input(INPUT_GET, "c$i") == "y"){
            $corr = "TRUE";
        }
        $sql = "INSERT INTO Respuesta (texto, correcta,Trivia_idTrivia) VALUES (\"  $aux\" , $corr,$preg);";
        echo $sql,".<br>";
        if( ! mysql_query($sql)){
            echo "Error", mysql_error();
        }else{
            echo "Paso<br>";
        }
            
    } 
?>