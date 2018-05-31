<?php
/*include 'cliente.php';
include 'conexion.php';
include 'producto.php';
$cliente = new cliente();
$listaClientes = $cliente->listar();

$producto = new producto();
$listaProducto = $producto->listar();
*/
?>
<html>
    <nav>
                <P ALIGN="right"> <a href="admin.php"><img src="imagen/inicio.png" width="80" height="30"><a href="index.php"><img src="imagen/salir1.png" width="80" height="30"></a> </p>
        </nav>
    <body>
         <STYLE> 
BODY { background: url(imagen/cinco.jpg) center fixed no-repeat} 
</STYLE>
        <form method="POST">
            <table style="margin: 0 auto">
                <tr>
                    
                    <th colspan="2">Datos del cliente</th>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><input type="text" name="date"></td>
                </tr>
                <tr>
                    <td>Empleado:</td>
                    <td><input type="text" name="uasuario"></td>
                </tr>
                
                <tr>
                    <td>Cliente:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                
                <tr>
                    <td>calzado:</td>
                    <td>
                        <select name="rol">
             
                            
                            
                        <?php
                        if(isset($listadoRoles)){
                            while($tupla = $listadoRoles->fetch_object()){
                                ?>
                            <option value="<?php echo $tupla->idRol; ?>"><?php echo $tupla->nombre; ?></option>
                                <?php
                            }
                        }
                        ?>       
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
      