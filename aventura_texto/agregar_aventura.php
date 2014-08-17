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
        <script type="text/javascript">
            function check(algo){
                var aux = document.getElementById(algo);
                if(algo[0] === "i"){
                    //alert(algo);
                    aux.parentNode.appendChild(document.createTextNode("algo"));
                }
            }
            function aux(){
                var cant = document.getElementById("cant");
                
                var r = document.getElementById("respuestas");
                while(r.hasChildNodes()){r.removeChild(r.lastChild);}        
                var input = document.createElement("input");
                input.value = cant.value;
                input.type = "hidden";
                input.name = "cant";
                r.appendChild(input);
                var cb, fi;
                
                for (var i=1; i<= cant.value; i++){
                    
                    input = document.createElement("textarea"); input.value="NULL"; input.name="r"+i;
                    r.appendChild(document.createTextNode("Respuesta "+i+": ")); r.appendChild(input);
                    cb = document.createElement("input");cb.type = "checkbox"; cb.id = "i"+i;cb.onchange=function(){check(this.id);};
                    fi = document.createElement("input");fi.type = "file"; fi.name = "i"+i;
                    r.appendChild(document.createTextNode("¿Imagen?: ")); r.appendChild(cb); r.appendChild(fi);r.appendChild(document.createElement("br"));
                    cb = document.createElement("input");cb.type = "checkbox"; cb.id = "s"+i; cb.onchange=function(){check(this.id);};
                    fi = document.createElement("input");fi.type = "file"; fi.name = "s"+i;        
                    r.appendChild(document.createTextNode("¿Sonido?: ")); r.appendChild(cb);r.appendChild(fi);r.appendChild(document.createElement("br"));
                    
                    cb = document.createElement("input");cb.type = "checkbox"; cb.id = "m"+i;cb.onchange=function(){check(this.id);};
                    fi = document.createElement("input");fi.type = "file"; fi.name = "m"+i;
                    r.appendChild(document.createTextNode("¿Minijuego?: ")); r.appendChild(cb);r.appendChild(fi);r.appendChild(document.createElement("br"));
                    r.appendChild(document.createElement("br"));
                }
                input = document.createElement("input");
                input.type ="submit";
                input.value = "Guardar";
                r.appendChild(input);
            }
        </script>
        <form action="JavaScript:aux()">
            Cantidad de parrafos: <input value="" type="text" id="cant" name="cant" >
            <input type="submit" value="setear">
        </form>
        <form action="insert_back.php" method="get" id="respuestas">
            
        </form>
        <form style="position: relative; display: table-row;">
            Parrafo:<textarea style="position: relative; margin-right: 20px;display: table-cell;">NULL</textarea>
            <table  style="position: relative; display: table-cell;">
                <tr>
                    <td>
                        ¿Imagen?
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>
                        ¿Sonido?
                        <input type="checkbox">
                    </td>
                </tr>
                <tr>
                    <td>
                        ¿Minijuego?
                        <input type="checkbox">
                    </td>
                </tr>
            </table>
            
            
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
