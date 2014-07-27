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
        <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align: center;"><?php echo get_pregunta(); ?></h4>
                    </div>
                    <div class="modal-body">
                        <div id="opciones">
                            <input type="radio" name="respuesta" value="1">
                            <br>
                            <?php echo get_r1(); ?>
                        </div>
                        <div id="opciones">
                            <input type="radio" name="respuesta" value="2">
                            <br>
                            <?php echo get_r2(); ?>
                        </div>
                        <div id="opciones">
                            <input type="radio" name="respuesta" value="3">
                            <br>
                            <?php echo get_r3(); ?>
                        </div>
                        <div id="opciones">
                            <input type="radio" name="respuesta" value="4">
                            <br>
                            <?php echo get_r4(); ?>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Responder</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>
