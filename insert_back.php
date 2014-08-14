<?php
    $conexion = mysql_connect("localhost","betoio","asd45asd"); 
    mysql_select_db("mydb", $conexion);
    
    for ($i = 1; $i <= filter_input(INPUT_GET, "cant"); $i++){
        
        $aux = filter_input(INPUT_GET, "r$i");
        $aux = mysql_real_escape_string($aux);
        $corr = "FALSE";
        if(filter_input(INPUT_GET, "c$i") == "y"){
            $corr = "TRUE";
        }
        $sql = "INSERT INTO Respuesta (texto, correcta) VALUES (\"  $aux\" , $corr);";
        echo $sql,".<br>";
        if( ! mysql_query($sql)){
            echo "Error", mysql_error();
        }else{
            echo "Paso";
        }
            
    } 
?>