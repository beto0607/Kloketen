<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>¡Aventura completada!</title>
        <link rel="stylesheet" type="text/css" href="./aventuras.css" media="screen">
    </head>
    <body>
        <div id="h1">
            <img id="mascara2" src="./mascara.png" onclick="javascritp:document.location='../index.php'"></img>
            <h1>¡Completaste la aventura: 
                <?php
                $aux_id = filter_input(INPUT_GET, "mision");
                mysql_connect("localhost","root","asd45asd"); 
                mysql_select_db("MisionTexto");
                $sql = "SELECT * FROM Mision WHERE idMision=".$aux_id;
                $result = mysql_query($sql);
                $result = mysql_fetch_array($result);
                echo htmlentities($result["nombre"]);
                ?>!
                <br>
                <a id="a" href="../index.php">Volver...</a>
            </h1>
        </div>
    </body>
</html>
