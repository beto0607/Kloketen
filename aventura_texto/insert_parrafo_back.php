<?php
    mysql_connect("localhost", "root", "asd45asd") or die(mysql_error());
    mysql_select_db("MisionTexto") or die(mysql_error());
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $imagen = filter_input(INPUT_POST, "imagen");
    
    if(is_uploaded_file($_FILES["imagen"]["tmp_name"])){
        echo "Hay imagen.<br>";
        $imagen = $_FILES['imagen']['tmp_name'];
        $imagen_tipo = $_FILES['imagen']['type'];
        $imagen_data = file_get_contents($imagen);
        $imagen_data = mysql_escape_string($imagen_data);
        $img_ok=true;
    }else{echo "No hay imagen<br>";$img_ok=false;}
    $sonido = filter_input(INPUT_POST, "sonido");
    if(is_uploaded_file($_FILES["sonido"]["tmp_name"])){
        echo "Hay sonido.<br>";
        $sonido = $_FILES['sonido']['tmp_name'];
        $sonido_tipo = $_FILES['sonido']['type'];
        $sonido_data = file_get_contents($sonido);
        $sonido_data = mysql_escape_string($sonido_data);
        $snd_ok = true;
    }else{echo "No hay sonido.<br>";$snd_ok=false;}
    
    $sql = "INSERT INTO Parrafo(idParrafo, texto, idAventura";
    $values = ")VALUES(".filter_input(INPUT_POST, "idParrafo").",'".filter_input(INPUT_POST, "parrafo")."',1";
    if($snd_ok and $img_ok){
        $sql .= ", imagen,imagen_tipo,sonido,sonido_tipo";
        $values .= ",'".$imagen_data."','".$imagen_tipo."','".$sonido_data."','".$sonido_tipo."')";
    }elseif ($snd_ok and ! $img_ok) {   
        $sql .=",sonido,sonido_tipo";
        $values .= ",'".$sonido_data."','".$sonido_tipo."')";
        echo $sonido_tipo;
    }elseif (! $snd_ok and  $img_ok){
        $sql .= ", imagen,imagen_tipo";
        $values .= ",'".$imagen_data."','".$imagen_tipo."')";
    }
    else{$values .=")";}
    echo "Hola - ".  filter_input(INPUT_POST, "imagen")." - <br>";
    //$sql = "UPDATE Parrafo SET imagen='$imagen_data' WHERE idParrafo=".filter_input(INPUT_POST, "idParrafo");    
    //echo $sql;
    
    $resultado = @mysql_query($sql.$values);
    if ($resultado){
        echo "El archivo ha sido copiado exitosamente.";
    }else{
        echo "Ocurrió algun error al copiar el archivo.<br> ",  mysql_error();
    }