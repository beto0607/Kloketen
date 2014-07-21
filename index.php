<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Kloketen - Aventura de texto</title>
       
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./files/normalize.css" media="screen">
        <link rel="stylesheet" type="text/css" href="./files/font.face.css" media="screen">

        <!-- JAVASCRIPT -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- BOOTSTRAP | Framework CSS -->

        <link rel="stylesheet" type="text/css" href="./files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./files/estilos.css" media="screen">
        <script type="text/javascript" src="./files/respond.js"></script>
        <script type="text/javascript" src="./files/bootstrap.min.js"></script>

        <!-- INTERACCIONES -->

        <script type="text/javascript" src="./aventura_de_texto.js" ></script>     
        
        
    </head>
    <body>


        
        <div id="contenedor" style="height: 967px;"> <!-- Comienza CONTENEDOR -->
                <div id="relatos"> <!-- Comienza RELATOS -->
                                        
                    <div class="relato actual primero" >
                        <p id="parrafo">
                            
                        </p>

                    </div>

                    <?php require_once("mostrar.php"); ?>
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

    </body>
</html>
