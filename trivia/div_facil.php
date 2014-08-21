<?php
require_once "trivia_back.php";
$fff = "";
foreach ($facil[$facil_num][1] as $val){
    $fff.= "<input class='respuesta' type='radio' name='respuestafacil' value='".$val[1]."'>".($val[0])."<br>";
}


echo '<img src="facil.png">
        <preg class="p_txt">'.$facil[$facil_num][0]." - ".$facil_num.'</preg>
        <respuestas id="trivia_facil" value="'.$facil[$facil_num][2].'">'.$fff.'</respuestas>
        <button type="button" class="btn" id="btn_responder"value="facil">Responder</button>';

echo    $GLOBALS["facil_num"];