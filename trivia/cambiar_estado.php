<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "trivia_back.php";
mysql_connect("localhost","root","asd45asd");
mysql_select_db("MisionTrivia");
$trivia = filter_input(INPUT_POST, "idTrivia");
$estado = filter_input(INPUT_POST, "estado");
$dif = filter_input(INPUT_POST, "dif");


if($dif =="f"){inc_facil();}
elseif($dif=="m"){$medio_num +=1;}
elseif($dif=="d"){$dificil_num +=1;}
$sql = "UPDATE Trivia SET estado=".$estado." WHERE idTrivia=".$trivia."-".$facil_num;
echo $sql;
