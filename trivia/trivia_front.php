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
    <body>
        <?php 
            require_once ("./trivia_back.php");
        ?>
        
        <script type="text/javascript">
            $(window).load(function(){
                $('#myModal').modal('show');
            });
            
            //var rc = <?php //echo $GLOBALS["pregunta"][1]?>
            
        </script>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom-color: #0B0B13">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align: center;"><?php echo get_pregunta(); ?></h4>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <?php 
                            echo '<div id="opciones">
                                <input type="radio" name="respuesta" value="1">
                                <br>
                                ',get_r1(),'
                            </div>';
                            echo '<div id="opciones">
                                <input type="radio" name="respuesta" value="1">
                                <br>
                                ',get_r2(),'
                            </div>';
                            if(get_r3()!=NULL){
                            echo '<div id="opciones">
                                <input type="radio" name="respuesta" value="1">
                                <br>
                                ',get_r3(),'
                            </div>';
                            }
                            if(get_r4()!=NULL){
                            echo '<div id="opciones">
                                <input type="radio" name="respuesta" value="1">
                                <br>
                                ',get_r4(),'
                            </div>';
                            }
                        ?>
                       
                    </div>
                    <div class="modal-footer" style="border: 0px;">
                        <button type="button" class="btn btn-primary" id="btn_responder">Responder</button>
                        <button type="button" class="btn" id="btn_volver"onclick="document.location='http://boemiz.com/shared-folder/kloketen/'">Volver</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
