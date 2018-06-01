<?php 
    //conectamos con nuestro servidor
    $conexion= mysql_connect('localhost', 'root', '');
    //vereficamos la conexion si es correcta
    if (!$conexion){
        echo "No se pudo conectar Con El Servidor";
    }  else {
        
        $base=  mysql_select_db('tienda');
        if (!$base){
            echo "No se encontro la BBDD";
        }
    }
        //recuperar las bariables
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $mensaje=$_POST['mensaje'];
    //hacemos la sentencia de sql
    $sql="INSERT INTO datos VALUES('$nombre', '$email', '$mensaje')";
    //ejecutamos la sentencia de sql
    $ejecutar=mysql_query($sql);
    //verificamos la ejecucion
    if (!$ejecutar){
        echo "hubo Algun Error Intentaste Inyectar codigo malisioso<br><a href=comentario2.php>Vorve</a>";
    }  else {
        echo "Datos Guardados Correctamente<br><a href=admin.php>Vorve</a>";
}
    
?>

