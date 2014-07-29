<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mision = filter_input(INPUT_POST, "mision");

mysql_connect("localhost","beto0607","asd45asd");
mysql_select_db("trivias");
$random =  rand(3, 8);
$result = mysql_query("SELECT * FROM trivia WHERE id=$random");

$reg = mysql_fetch_array($result,MYSQL_BOTH);


    
    function get_pregunta(){
        return htmlentities($GLOBALS["reg"]["pregunta"]);
    }
    
    function get_r1(){
        return htmlentities($GLOBALS["reg"]["r1"]);
    }
    function get_r2(){
        return htmlentities($GLOBALS["reg"]["r2"]);
    }
    function get_r3(){
        return htmlentities($GLOBALS["reg"]["r3"]);
    }   
    function get_r4(){
        return htmlentities($GLOBALS["reg"]["r4"]);
    }
    function verificar($respuesta){
        return (strcmp($respuesta, $GLOBALS["reg"]["rc"]));
                
                
    }
    