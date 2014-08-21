<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mision = filter_input(INPUT_GET, "mision");
if(! $mision){$mision = 1;}

mysql_connect("localhost","root","asd45asd");
mysql_select_db("MisionTrivia");
$mision_nombre = mysql_query("SELECT nombre FROM Mision WHERE idMision=".$mision);
$mision_nombre = mysql_fetch_array($mision_nombre,MYSQL_BOTH);
$mision_nombre = $mision_nombre["nombre"];
$pregunta = mysql_query("SELECT t.idTrivia, t.pregunta FROM Trivia t WHERE Mision_idMision=$mision AND dificultad=1;");
$facil= array();
$facil_num = 0;
while($arr = mysql_fetch_array($pregunta,MYSQL_BOTH)){
    $sql = "SELECT idRespuesta, texto, correcta, Trivia_idTrivia FROM Respuesta WHERE Trivia_idTrivia=".$arr['idTrivia'];
    $result = mysql_query($sql);
    $aux = array();
    while ($ar2 = mysql_fetch_array($result,MYSQL_BOTH)){
        array_push($aux, array($ar2["texto"],$ar2["correcta"]));
        $xxx=$ar2["Trivia_idTrivia"];
    }
    array_push($facil, array($arr["pregunta"],$aux, $xxx));
}

$pregunta = mysql_query("SELECT t.idTrivia, t.pregunta FROM Trivia t WHERE Mision_idMision=$mision AND dificultad=2;");
$medio= array();
$medio_num = 0;
while($arr = mysql_fetch_array($pregunta,MYSQL_BOTH)){
    $sql = "SELECT idRespuesta, texto, correcta, Trivia_idTrivia FROM Respuesta WHERE Trivia_idTrivia=".$arr['idTrivia'];
    $result = mysql_query($sql);
    $aux = array();
    while ($ar2 = mysql_fetch_array($result,MYSQL_BOTH)){
        array_push($aux, array($ar2["texto"],$ar2["correcta"]));
        $xxx=$ar2["Trivia_idTrivia"];
    }
    array_push($medio, array($arr["pregunta"],$aux, $xxx));
}

$pregunta = mysql_query("SELECT t.idTrivia, t.pregunta FROM Trivia t WHERE Mision_idMision=$mision AND dificultad=3;");
$dificil= array();
$dificil_num = 0;
while($arr = mysql_fetch_array($pregunta,MYSQL_BOTH)){
    $sql = "SELECT idRespuesta, texto, correcta, Trivia_idTrivia FROM Respuesta WHERE Trivia_idTrivia=".$arr['idTrivia'];
    $result = mysql_query($sql);
    $aux = array();
    while ($ar2 = mysql_fetch_array($result,MYSQL_BOTH)){
        array_push($aux, array($ar2["texto"],$ar2["correcta"]));
        $xxx=$ar2["Trivia_idTrivia"];
    }
    array_push($dificil, array($arr["pregunta"],$aux, $xxx));
}


function inc_facil(){$GLOBALS["facil_num"]+=1;}