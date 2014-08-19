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
        <script src="avaaaenturas.js"></script>
        <!-- CSS -->

        <link rel="stylesheet" type="text/css" href="./aventuras.css" media="screen">
        <!-- Bootstrap -->
        <script type="text/javascript" src="./bootstrap.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(document).on("click", ".relato b",function(){
                id = $(this).attr("id");
                //$.ajax({type:"POST",url:"./imagen_mostrar.php",data:{name:id},success:function(){alert("aaaa");}});
                $(document.getElementById("parrafo")).fadeOut(1000, "swing", function(){
                    document.location = "?name="+id;
                    
                    $(this).fadeIn(1000);
                    
                });
                return false;
            });        
        </script>
        
        <img id="back2" src="disco magico.png"></img>
        <img id="back1" src="disco magico.png"></img>
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

                <?php 
                    
                ?>
                <p id="parrafo">
                    <?php 
                        require_once("./aventuras_back.php") ;
                        if($id_bd==FALSE){
                            header("Location: ./completa.php?mision=".$id_bd);
                        }
                        $id_actual = filter_input(INPUT_GET, "name");
                        if($id_actual<0){
                            $sql ="UPDATE Mision SET estado=-1 WHERE idMision=".$id_bd;
                            mysql_query($sql);
                            header("Location: ./completa.php?mision=".$id_bd);
                        }
                        if(! $id_actual){$id_actual=0;}else{$id_actual-=1;}
                        echo $reg[$id_actual][0];
                    ?>
                    
                    <div class="circle-image" id="imagen" >
                        <img id="img" src="imagen_mostrar.php?name=<?php echo filter_input(INPUT_GET, 'name');?>" />
                        
                    </div>
                </p>                    

            </div>
        </div>
        <audio controls autoplay hidden="">
            <source  type="audio/mpeg" src=<?php echo "'./sound/s".filter_input(INPUT_GET, "name").".mp3'"?>>
                    
        </audio>
        


    </body>
</html>
