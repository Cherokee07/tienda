<?php

include 'conexion.php';
 include 'producto.php';
$id = $_GET['id'];

$producto = new producto();
$sqlModifica = $producto->buscarProducto($id);

$conexion = new conexion('localhost', 'root', '', 'tienda');
$conexion->conectar();
$productoBuscado = $conexion->ejecutar($sqlModifica);

if(isset($_POST['nombre']) && isset($_POST['marca'])  && isset($_POST['genero'])&& 
         isset($_POST['talla'])&& isset($_POST['precio'])
        && isset($_POST['existencia'])){
    
    $producto->setId($id);
    $producto->setNombre($_POST["nombre"]);
    $producto->setGenero($_POST["genero"]);
    $producto->setMarca($_POST["marca"]);
    $producto->setTalla($_POST["talla"]);
    $producto->setPrecio($_POST["precio"]);
    $producto->setExistencia($_POST["existencia"]);
    
    
    $conexion->ejecutar($producto->modificarProducto());
    header('location:modificarEmpleado.php');
}
   
?>

<html>
    <head>                
   <body>
       <STYLE> 
BODY { background: url(imagen/cinco.jpg) center fixed no-repeat} 
</STYLE>
        <form method="POST">
             <table align="center">
  
                <?php while ($tupla = $productoBuscado->fetch_object()){?>
                
                <tr>
                    
                    <th colspan="2">Datos de los calzados</th>
                </tr>
                <tr>
                    
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" value="<?php echo $tupla->nombre; ?>"></td>
                </tr>
                
                <tr>
                    
                    <td>Marca</td>
                    <td><input type="text" name="marca" value="<?php echo $tupla->marca; ?>"></td>
                </tr>
                <tr>
                    
                    <td>Genero</td>
                    <td><input type="text" name="genero" value="<?php echo $tupla->genero; ?>"></td>
                </tr>
              
               <tr>
                    
                    <td>Talla</td>
                    <td><input type="text" name="talla" value="<?php echo $tupla->talla; ?>"></td>
                </tr>
                <tr>
                    
                    <td>Precio</td>
                    <td><input type="text" name="precio" value="<?php echo $tupla->precio; ?>"></td>
                </tr>
            <tr>
                    
                    <td>Existencia</td>
                    <td><input type="text" name="existencia" value="<?php echo $tupla->existencia; ?>"></td>
                </tr>
                
                   <td><input type="submit" value="Guardar"></td>
                   <td><a href="modificarUno.php">Cancelar</a></td>
                <?php 
                
} ?>
            </table>
        </form>
    </body>
    </head>
</html>