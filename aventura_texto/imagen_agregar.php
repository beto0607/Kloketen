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
        <?php/*
            $conexion = mysql_connect("localhost","betoio","asd45asd"); 
            mysql_select_db("", $conexion);
            $result = mysql_query("SELECT * FROM Respuesta");
            $reg = mysql_fetch_array($result,MYSQL_NUM);
            echo $reg[1],"  --  asdfasdf<br>";*/
        ?>
        
        <form action="subir_imagen.php" method="POST" enctype="multipart/form-data">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" />
            <input type="submit" name="subir" value="Subir Imagen"/>
        </form>        
<?php

    /*
    # Conectamos con la base de datos
    $link=mysql_connect("localhost","root","asd45asd");
    mysql_select_db("example",$link);
    //echo "<BR>".$_FILES["userfile"]["name"];		//nombre del archivo
    //echo "<BR>".$_FILES["userfile"]["type"];		//tipo
    //echo "<BR>".$_FILES["userfile"]["tmp_name"];	//nombre del archivo de la imagen temporal
    //echo "<BR>".$_FILES["userfile"]["size"];		//tamaño

    # Comprovamos que se haya subido un fichero
    if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
    {   
	# Cogemos el formato de la imagen
	if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
	{
		# Cogemos la anchura y altura de la imagen
		$info=getimagesize($_FILES["userfile"]["tmp_name"]);
		//echo "<BR>".$info[0]; //anchura
		//echo "<BR>".$info[1]; //altura
		//echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
		//echo "<BR>".$info[3]; //cadena de texto para el tag <img

		# Escapa caracteres especiales
		$imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

		# Agregamos la imagen a la base de datos
                $result=mysql_query("INSERT INTO imagen (nombre,imagen) VALUES ('asdfasdf','".$imagenEscapes."')",$link);
		//$result=mysql_query("INSERT INTO 'imagen' (nombre,imagen) VALUES ('PRUEBA',".$imagenEscapes.")",$link);
		# Cogemos el identificador con que se ha guardado
		$id=mysql_insert_id();

		# Mostramos la imagen agregada
		echo "Imagen agregada con el id ".$id."<BR>";
		echo "<img src='imagen_mostrar.php?id=".$id."' width='".$info[0]."' height='".$info[1]."'>";
	}else{
		$error="El formato de archivo tiene que ser JPG, GIF, BMP o PNG.";
	}
}else{
	$error="No ha seleccionado ninguna imagen...";
}

if ($error!="")
{
	echo "</center><P><font face='Arial' size=2 color='#ff0000'> Error: ".$error."</font><br>";
}
     * <form ENCTYPE="multipart/form-data" action="imagen_agregar.php" method="POST">
	<INPUT NAME="userfile" TYPE="file">
	<p><input type="submit" value="Guardar Imagen">
</form> 
*/?>


</body>
</html>
