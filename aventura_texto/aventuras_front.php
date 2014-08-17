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
        <img id="back1" src="disco magico.png"></img>
        <img id="back2" src="disco magico.png"></img>

        <div id="contenedor" style="color: white"> <!-- Comienza CONTENEDOR -->
            <div id="mision">
                <div id="masc_div">
                    <img id="mascara" class="animar" src="./mascara.png"></img>
                </div>
                <div id="guarda"></div>
                <text id="nombre_mision"><?php echo filter_input(INPUT_GET, "mision");?></text>
                <button id="button_volver" onclick="document.location='http://boemiz.com/shared-folder/kloketen/'">Volver</button>
                   
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
                    <?php 
                        
                    $js_array = json_encode($reg);
                    echo "var arrayJS=$js_array;\n";
                    ?>
                    
                    document.getElementById("parrafo").innerHTML = arrayJS[0];
                    //alert(document.getElementById("parrafo").innerHTML);
                </script>
            </div>
        </div>

    </body>
</html>
