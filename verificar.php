<?php
    include 'trivias.php';
    $respuesta = filter_input(INPUT_POST, 'rid');
    echo $respuesta;
    //echo strcmp($respuesta, ($GLOBALS["reg"]["rc"]));