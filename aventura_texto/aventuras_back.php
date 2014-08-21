<?php
    mysql_connect("localhost","root","asd45asd"); 
    mysql_select_db("MisionTexto");
    $id_bd=filter_input(INPUT_POST, "id_db");
    if(!$id_bd){$id_bd="1";}
    $sql = "SELECT * FROM Mision WHERE idMision=".$id_bd;
    $result = mysql_query($sql);
    $result = mysql_fetch_array($result);
    if($result["estado"]<=-1){
            $id_bd= FALSE;
        }
    else{

        $sql = "SELECT * FROM Parrafo WHERE idAventura=".$id_bd;

        $result = mysql_query($sql);
        $reg = array();
        while($aux = mysql_fetch_array($result, MYSQL_BOTH)){
            $arr = array($aux["texto"]);
            if($aux['imagen']){
                array_push($arr, $aux["imagen_tipo"], $aux["imagen"]);
            }
            if($aux['sonido']){
                array_push($arr, $aux["sonido_tipo"], $aux["sonido"]);
            }
            array_push($reg, $arr);
        }
        echo FALSE;
    }