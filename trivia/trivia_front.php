<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kloketen - Trivia</title>
        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="trivia.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./trivia.css" media="screen">
        <!-- Bootstrap -->
        <link href="bootstrap.css" rel="stylesheet">


    </head>
    <body style="background-color: #19192D;">
        <?php 
            require_once ("./trivia_back.php");
            
        ?>
        
        <img id="back2" src="disco magico.png"></img>
        <img id="back1" src="disco magico.png"></img>
        <div id="contenedor" > <!-- Comienza CONTENEDOR -->
            <div id="mision">
                <div id="masc_div">
                    <img id="mascara" class="animar" src="./mascara.png" href="http://www.wikipedia.org/" onclick="javascript:document.location='http://www.wikipedia.org/'"></img>
                </div>
                <div id="guarda"></div>
                <text id="nombre_mision"><?php echo htmlentities($mision_nombre);?></text>
                <button id="button_volver" onclick="document.location='http://boemiz.com/shared-folder/kloketen/'">Volver</button>
            </div>
            <div id='pierna'>
                <div class="pregunta" id="facil" value="1">
                    <?php require_once 'div_facil.php';?>
                </div>
                <div class="pregunta" id='medio' >
                    <img src="medio.png">
                    <preg class="p_txt"><?php echo ($medio[$medio_num][0]); ?></preg>
                    <respuestas id="trivia_medio" value="<?php echo $medio[$medio_num][2];?>">
                        <?php
                            foreach ($medio[$medio_num][1] as $val){
                                echo '<input id="respuesta" type="radio" name="respuestamedio" value="'.$val[1].'">
                                '.($val[0]).'<br>';
                            }
                        ?>
                    </respuestas>
                    <button type="button" class="btn" id="btn_responder" value="medio">Responder</button>
                </div>
                <div class="pregunta" id='dificil'>
                    <img src="dificil.png">
                    <preg class="p_txt"><?php echo ($dificil[$dificil_num][0]); ?></preg>
                    <respuestas id="trivia_dificil" value="<?php echo $dificil[$dificil_num][2];?>">
                        <?php
                            foreach ($dificil[$dificil_num][1] as $val){
                                echo '<input class="respuesta" type="radio" name="respuestadificil" value="'.$val[1].'">
                                '.($val[0]).'<br>';
                            }
                        ?>
                    </respuestas>
                    <button type="button" class="btn" id="btn_responder" value="dificil">Responder</button>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>

