<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mision = filter_input(INPUT_POST, "mision");
$mision = 1;
echo $mision,"  -asdfasdf<br>";

mysql_connect("localhost","betoio","asd45asd");
mysql_select_db("MisionTrivia");

$pregunta = mysql_query("SELECT t.idTrivia, t.pregunta FROM Trivia t WHERE Mision_idMision=$mision AND dificultad=1;");
$pregunta = mysql_fetch_array($pregunta,MYSQL_BOTH);
$aux = $pregunta['idTrivia'];
$sql = "SELECT idRespuesta, texto, correcta FROM Respuesta WHERE Trivia_idTrivia= $aux ";
$result = mysql_query($sql);
$respuestas = array();
while($aux = mysql_fetch_array($result)){
    array_push($respuestas, $aux);
}
foreach ($respuestas as $aux){
    echo $aux["texto"]," - <br>";
    
}
    function get_pregunta(){
        return htmlentities($GLOBALS["pregunta"]["pregunta"]);
    }
    
    function get_r1(){
        return htmlentities($GLOBALS["repuestas"][2]);
    }
    function get_r2(){
        return htmlentities($GLOBALS["repuestas"][5]);
    }
    function get_r3(){
        return htmlentities($GLOBALS["repuestas"][8]);
    }   
    function get_r4(){
        return htmlentities($GLOBALS["repuestas"][10]);
    }
    function verificar($respuesta){
        return (strcmp($respuesta, $GLOBALS["reg"]["rc"]));
                
                
    }
echo get_pregunta()," - <br>",  $respuestas[0], " - <br>", " - <br>";