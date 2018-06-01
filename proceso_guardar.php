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


$nombre=$_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']));
$sql = "INSERT INTO ima VALUES('$nombre', '$imagen')";

$ejecutarr=$mysql_query($sql);
if(!$ejecutarr){
    echo "Se inserto la imagen";
}  else {
    echo "no se guardo la imagen";
}
?>
