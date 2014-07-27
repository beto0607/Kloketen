<?php
    $id_bd = filter_input(INPUT_POST, "id_bd");
    if($id_bd == false){$id_bd=10;}
    mysql_connect("localhost","root","asd45asd"); 
    mysql_select_db("aventura_texto");
    $result = mysql_query("SELECT * FROM aventura WHERE id=$id_bd");
    if(mysql_errno()==0){
        
        $reg = mysql_fetch_array($result, MYSQL_BOTH);
        $reg = explode("**", $reg[1]);
        array_unshift($reg, " ");
    }else{}
    