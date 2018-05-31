<! doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Archivos</title>
        <style>
            table{
                margin: auto;
                width: 450px;
                border: 2px dotted #ff0000;
            }
        </style>
    </head>
    
    
         <STYLE> 
BODY { background: url(imagen/itvo.JPG) } 
</STYLE>
        <FONT  FACE="arial" SIZE=6 COLOR=black> solo se pueden subir imagenes jpg/jpeg/png </FONT>
        <form action="datosImagen.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>
                <input type="text" name="nombre" placeholder="Nombre..." value="" required/><br/><br/>
                <label for="imagen">Imagen:</label></td>
            <td><input type="file" name="imagen" size="20" accept="image/*"   required></label></td></tr>
      
        
        <tr><td colspan="2" style="text-align:center"> <input type="submit" value="Enviar Imagen"></td></tr></table>
        <li><a href="admin.php">Volver</a>
				</li>
        
        
        </form>
    </body>



</html>