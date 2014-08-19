<?php


include './aventuras_back.php';

$aux_i = filter_input(INPUT_GET, "name")-1;

if($reg[$aux_i][2]){
    header("Content-type:".$reg[$aux_i][1]);
    echo $reg[$aux_i][2];
}else{
    header("Content-type: image/jpg");
    echo "NULL";
}
?>