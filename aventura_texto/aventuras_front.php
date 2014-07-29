<!DOCTYPE html>
<!--
author: Roberto Albanesi

desc: antes de llamar se deben hacer 3 INPUT_POST, id_db: el id de la aventura, mision: el nombre de la mision, name: el nombre del usuario 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kloketen - Aventura de texto</title>
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="aventuras.js"></script>
        <!-- CSS -->

        <link rel="stylesheet" type="text/css" href="./aventuras.css" media="screen">
        <!-- Bootstrap -->
        <script type="text/javascript" src="./bootstrap.min.js"></script>
    </head>
    <body>
        <img id="back1" src="circulo1-fondo.png"></img>
        <img id="back2" src="circulo2-fondo.png"></img>
        <div id="header">
            <img id="home" src="./Logo2.png"></img>
            <text id="nombre">
                Alejandro Iparraguirre
            </text>
            <div id="guarda"></div>
        </div>
        <div id="contenedor" style="color: white"> <!-- Comienza CONTENEDOR -->
            <div id="mision">
                <img id="mascara" class="animar" src="./mascara.png"></img>
                <text id="nombre_mision">Arjé</text>
                <button id="button_volver">Volver</button>
                   
            </div>
            <div class="relato" >
                <p id="parrafo">
                </p>
                <?php require_once("./aventuras_back.php"); ?>
                <?php 
                    echo "<form action=$_SERVER[PHP_SELF] method=post name=enviar>
                        <input type=hidden name=id_php></form>";
                ?>
                <script type = text/javascript>
                    var arrayJS=<?php echo json_encode($reg);?>;
                    document.getElementById("parrafo").innerHTML = arrayJS[1];
                </script>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
