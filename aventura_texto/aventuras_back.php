<?php
    $id_bd = filter_input(INPUT_GET, "id_bd");
    if($id_bd == false){$id_bd=10;}
    mysql_connect("localhost","root","asd45asd"); 
    mysql_select_db("MisionTexto");/*
    $result = mysql_query("SELECT * FROM aventura WHERE id=$id_bd");
    if(mysql_errno()==0){
        
        $reg = mysql_fetch_array($result, MYSQL_BOTH);
        $reg = explode("**", $reg[1]);
        array_unshift($reg, " ");
    }else{}
    */
    $sql = "SELECT texto FROM Parrafo WHERE idAventura=1";
    $result = mysql_query($sql);
    $reg = array();
    while($aux = mysql_fetch_array($result, MYSQL_BOTH)){
        //array_unshift($reg, (mysql_escape_string($aux[0])));
        $aux = htmlentities($aux[0]);
        //$reg[] = $aux;
        array_push($reg, $aux);
    }
    
    