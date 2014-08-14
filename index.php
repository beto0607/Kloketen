<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kloketen</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body>
        
        <button class="boton_trivia"  value="Trivias">Trivias</button>
        <button class="boton_aventura"  value="Aventuras de texto">Aventuras de texto</button>
        <button onclick="submit_form();">Submit</button>
        <form name="myform" action="./aventura_texto/aventuras_front.php" method="GET">
            <input type="" name="name" value="blabla" > 
            <input type="" name="mision" value="asdfasdf">
            <input type="hidden" name="id_bd" value="10">
            
        </form>
        <script language="javascript">
            <!--
            function submit_form() 
            {
              document.myform.submit()
            } 
              -->
        </script>
        
        <script type="text/javascript" src="index.js">
    
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>
