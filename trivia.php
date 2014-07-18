<!DOCTYPE html>
<!--
    To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Trivia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- JAVASCRIPT -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="./trivia.js"></script>
        <script type="text/javascript" src="./popup_no_intrusivo.js"></script>

    </head>
    <body>
        <h1>Trivia.php</h1> 
        
        <div id="popup">
            <p>Soy un popup flotante. puedes <a href="javascript: cerrarPopup('popup');">cerrarme</a> si quieres</p>
        </div>
        <script>
        function cerrarPopup(pid)
        {
           document.getElementById(pid).style.visibility = 'hidden';      
        }
        </script>
        <style>
        #popup
        {
           position: absolute;
           border: 1px solid #666666;
           background-color:#900000;
           width: 90%;
           height: 90%;
           margin-top: 50px;
           top: 5%;
           left: 5%;
           z-index: 1;
        }
        </style>
        
        <?php 
            include("trivias.php"); 
            $reg = conectar(1);
            echo "- ",get_pregunta();
        ?>
    </body>
</html>
