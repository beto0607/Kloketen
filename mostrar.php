<?php
    mysql_connect("localhost","root","asd45asd"); 
    mysql_select_db("aventura_texto");
    $result = mysql_query("SELECT * FROM aventura WHERE categoria='trivia'");
    $reg = mysql_fetch_array($result, MYSQL_BOTH);
    $reg = explode("**", $reg[1]);
    array_unshift($reg, " ");

?>	
