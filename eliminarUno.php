<?php

include 'conexion.php';
include 'producto.php';

$id =$_GET['id'];
if(isset($_POST['id'])){

   $conexion=new conexion('localhost', 'root', '', 'tienda');
   $conexion->conectar();
   $producto=new producto();
   $conexion->ejecutar($producto->eliminarProducto($_POST['id']));
   header("location:eliminarProducto.php");


  }
?>


 <html>
     <head></head>
     <body>
           <form method="POST">
                <h3>¿Esta seguro de desea eliminar?</h3>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" value="aceptar">
                <a href="eliminarProducto.php">cancelar</a>
   </form>
 </body>
</html>

