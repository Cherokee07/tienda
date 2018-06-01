<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Archivos</title>
        
    </head>
    <body>
       <FONT  FACE="arial" SIZE=6 COLOR=black> solo se pueden subir imagenes jpg/jpeg/png </FONT>
    <center>
        
        <form><br/><br/><br/>
            <form action="datosImagen.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="nombre" placeholder="Nombre..." value="" required>/><br/><br/>
            <input type="file" name="imagen"/><br/><br/>
            <input type="submit" value="Aceptar">
        </form>
    </center>
    </body>
</html>