<?php

    function conectar(){
        $id = filter_input(INPUT_POST, "id");
        mysql_connect("localhost","root","asd45asd");
        mysql_select_db("trivias");
        $result = mysql_query("SELECT * FROM trivia WHERE id=$id");
        $reg = mysql_fetch_array($result, MYSQL_BOTH);
        return $reg;
    }
    
    function get_pregunta(){
        
        return $GLOBALS["reg"]["pregunta"];
    }
    
    function get_r1(){
        return $GLOBALS["reg"]["r1"];
    }
    function get_r2(){
        return $GLOBALS["reg"]["r2"];
    }
    function get_r3(){
        return $GLOBALS["reg"]["r3"];
    }   
    function get_r4(){
        return $GLOBALS["reg"]["r4"];
    }
    function verificar($respuesta){
        return (strcmp($respuesta, $GLOBALS["reg"]["rc"]));
                
                
    }
    conectar();
?>
