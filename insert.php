<?php
    mysql_connect("localhost","root","asd45asd");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{echo "Conectado... <br>";}
    mysql_select_db("aventura_texto");
    $text = filter_input(INPUT_POST, 'texto');
    $cat = filter_input(INPUT_POST, 'categoria');
    $resul = mysql_query("INSERT INTO aventura(texto, categoria) VALUES(\"$text\",\"$cat\")");
    echo mysql_error();
    echo " - ".$resul[0];
    mysqli_close($con);
?>