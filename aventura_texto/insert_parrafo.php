<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //include "./insert_parrafo_back.php";
        ?>

        <form action="insert_parrafo_back.php" method="POST" id="parrfo" enctype="multipart/form-data">
            idParrafo: <input type="text" name="idParrafo"><br>
            idAventura: <input type="text" value=1 DEname="idAventura"><br>
            <br>
            Parrafo: <textarea value=""  name="parrafo" ></textarea> 
            <br>
            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" />
            <br>
            <br>
            <label for="sonido">Sonido:</label>
            <input type="file" name="sonido" id="sonido" />
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
        
    </body>
</html>
