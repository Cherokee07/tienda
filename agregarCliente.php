<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <STYLE> 
BODY { background: url(imagen/admin2.jpg) center fixed no-repeat} 
</STYLE>
                  
    
        <nav>
                <P ALIGN="right"> <a href="admin.php"><img src="imagen/inicio.png" width="80" height="30"><a href="index.php"><img src="imagen/salir1.png" width="80" height="30"></a> </p>
        </nav>
        <form method="POST">
            <table align="center">
                <tr><th colspan="2">Agregar Datos del Cliente</th></tr>
                <tr colspan="2">
                    <td >Nombre Completo:</td>
                    <td><input type="text" name="nombre"</td>
                </tr>
                <tr>
                    <td>RFC:</td>
                    <td><input type="text" name="RFC"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><input type="submit" value="Aceptar" </td>
                </tr>
                
               
                
            </table>
            <?php
            if (isset($datos)){   
            
            ?>
            <br/>
            <br/>
            <table border="1" style="margin: 0 auto">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th colspan="2">Acciones</th>
                </tr>
                <?php
                while($tupla = $datos->fetch_object()){
                    ?>
                <tr>
                    <td><?php echo $tupla->id; ?></td>
                    <td><?php echo $tupla->nombre; ?></td>
                    <td><?php echo $tupla->RFC; ?></td>
                     
                    <td><a href="eliminar.php?id=<?php echo $tupla->id; ?>">Eliminar</td>
                    <td><a href="modificar.php?id=<?php echo $tupla->id; ?>">Modificar</td>
                </tr>
                <?php
                }
                ?>
            </table>
            
            <?php
             }
            ?>
            
        </form>
    </body>
</html>
