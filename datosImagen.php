<?php
$conexion=mysql_connect('localhost', 'root', '');
    //vereficamos la conexion si es correcta
    if (!$conexion){
        echo "No se pudo conectar Con El Servidor";
    }  else {
        
        $base=mysql_select_db('tienda');
        if (!$base){
            echo "No se encontro la BBDD";
        }
    }


//recibimos los datos de la imagen

$nombre=$_POST['nombre'];
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamagno_imagen=$_FILES['imagen']['size'];
//echo $tipo_imagen;

if($tamagno_imagen<=112640){
    if($tipo_imagen=="/imagen/jpeg"|| $tipo_imagen=="/imagen/jpg" || $tipo_imagen=="/imagen/png"){
//ruta de la carpeta destino en servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT']. '/Tienda/imagen2/';
//movemos la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

    }



$sql = "INSERT INTO ima(nombre, imagen) VALUES('$nombre', '$nombre_imagen')";
    
//$ejecutar=$mysql_query($sql);
$ejecuta=mysql_query($sql);

if($ejecuta){
    echo "Se inserto la imagen<br><a href=imagen.php>Vorve</a>";
}

    
    

} else{
    echo "El tamaño es demasiado grande<br><a href=imagen.php>Vorve</a>";
}

?>