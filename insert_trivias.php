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
            $conexion = mysql_connect("localhost","betoio","asd45asd"); 
            mysql_select_db("mydb", $conexion);
            $result = mysql_query("SELECT * FROM Respuesta");
            $reg = mysql_fetch_array($result,MYSQL_NUM);
            echo $reg[1],"  --  asdfasdf<br>";
        ?>
        
        <script type="text/javascript">
            function aux(){
                var cant = document.getElementById("cant");
                if(cant.value >6){cant.value=6;}
                var r = document.getElementById("respuestas");
                while(r.hasChildNodes()){r.removeChild(r.lastChild);}        
                var input = document.createElement("input");
                input.value = cant.value;
                input.type = "hidden";
                input.name = "cant";
                r.appendChild(input);
                input = document.createElement("input");        
                input.type="text";
                input.name="pregunta";
                r.appendChild(document.createTextNode("Pregunta: "));
                r.appendChild(input);
                r.appendChild(document.createElement("br"));
                for (var i=1; i<= cant.value; i++){
                    input = document.createElement("input");
                    input.type="text";
                    input.value="NULL";
                    input.name="r"+i;
                    r.appendChild(document.createTextNode("Respuesta "+i+": "));
                    r.appendChild(input);
                    input = document.createElement("input");
                    input.type="text";        
                    input.value ="n";
                    input.name="c"+i;
                    r.appendChild(document.createTextNode("¿Correcta?: "));
                    r.appendChild(input);
                    r.appendChild(document.createElement("br"));
                }
                input = document.createElement("input");
                input.type ="submit";
                input.value = "Guardar";
                r.appendChild(input);
            }
        </script>
        <form action="JavaScript:aux()">
            Cantidad de respuestas: <input value="" type="text" id="cant" name="cant" >
            <input type="submit" value="setear">
        </form>
        <form action="insert_back.php" method="get" id="respuestas">
            
        </form>
        

    </body>
</html>
