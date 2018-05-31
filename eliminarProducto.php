<?php

include 'conexion.php';
 include 'producto.php';
 
   

$producto = new producto();
$conexion = new conexion('localhost','root', '','tienda');
$conexion->conectar();

if(isset($_POST['nombre']) && isset($_POST['marca'])&& isset($_POST['genero']) && isset($_POST['talla'])
        && isset($_POST['precio'])&& isset($_POST['existencia'])){
    
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $genero = $_POST['genero'];
    $talla= $_POST['talla'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];
    
   
    
    
    $producto->setNombre($nombre);
    $producto->setMarca($marca);
    $producto->setGenero($genero);
    $producto->setTalla($talla);
    $producto->setPrecio($precio);
    $producto->setexistencia($existencia);
    
    
    
    $conexion->ejecutar($producto->consulta());
    
  
    
}
$datos = $conexion->ejecutar($producto->listarProducto());
$conexion->desconectar();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav>
                <P ALIGN="right"> <a href="admin.php"><img src="imagen/inicio.png" width="80" height="30"><a href="index.php"><img src="imagen/salir1.png" width="80" height="30"></a> </p>
        </nav>
        <form method="POST">
            <table align="center">
                <tr><th colspan="2">Datos del Producto</th></tr>
                <tr colspan="2">
                    <td >Nombre Producto  :</td>
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
                    <th>Marca</th>
                     <th>Genero</th>
                    <th>Talla</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th colspan="2">Acciones</th>
                </tr>
                <?php
                while($tupla = $datos->fetch_object()){
                    ?>
                <tr>
                    <td><?php echo $tupla->id; ?></td>
                    <td><?php echo $tupla->nombre; ?></td>
                    <td><?php echo $tupla->marca; ?></td>
                     <td><?php echo $tupla->genero; ?></td>
                    <td><?php echo $tupla->talla; ?></td>
                     <td><?php echo $tupla->precio; ?></td>
                      <td><?php echo $tupla->existencia; ?></td>
                      <td><a href="eliminarUno.php?id=<?php echo $tupla->id; ?>">Eliminar</td>
                    
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

