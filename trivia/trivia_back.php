<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mision = filter_input(INPUT_POST, "mision");

mysql_connect("localhost","beto0607","asd45asd");
mysql_select_db("trivias");
$result = mysql_query("SELECT * FROM trivia WHERE id=$mision");
//$random = rand(0, array_count_values($result));
$reg = mysql_fetch_array($result,MYSQL_BOTH);
//return $reg[$random];

    
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
    