<! doctype html>
<html>
      <head>
          
    <meta charset="utf-8">
        <title>Formulario De Comentarios</title>
        <style>
            
        </style>
    </head>
    <center>
        <body background="imagen/f3.png" >
    <body>
    
    <div class="form">
            <form action="comentario.php" method="post" >
                <table align="center">
                <p>Nombre</p>
                <label for="nombre"></label>
                <br>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <p>Email</p>
                <label for="email"></label>
                <br>
                <input type="email" name="email" placeholder="alguien@algo.com" required>
                <p>Mensaje</p>
                <label for="mensaje"></label>
                <br>
                <textarea name="mensaje" placeholder="Escriba su Mensaje" required></textarea>
                <p></p>
                <input type="submit" value="Enviar">
                </table>
                
                                 <li>
					<ul>
                                            <li><a href="admin.php">Volver</a></li>	
					</ul>
				</li>
            
            </form>
            </div>
        
    </body>
             

</html>
<?php

?>
