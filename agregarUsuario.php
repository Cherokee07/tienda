<?php

include 'rol.php';
include 'usuario.php';
include 'conexion.php';
/*
$usuario = new usuario();
if(isset($_POST['nombre']) && isset($_POST['usuario'])&& isset($_POST['password']) && isset($_POST['idRol'])){
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $idRol= $_POST['idRol'];
    
    $usuario->setNombre($nombre);
    $usuario->setUsuario($usuario);
     $usuario->setPassword($genero);
    $usuario->setIdRol($idRol);
    
    $conexion->ejecutar($usaurio->consulta());
    
  
    
}
$datos = $conexion->ejecutar($producto->listarProducto());
$conexion->desconectar();
?>
*/

$rol = new rol();
$listadoRoles = $rol->listar();
if(isset($_POST['usuario']) && isset($_POST['usuario'])){
    
    $pass1 = $_POST['password'];
    $pass2 = $_POST['confirmar'];
    
  if ($pass1 == $pass2) {
    $usuario = new usuario();
    $usuario->setNombre($_POST['usuario']);
    $usuario->setPassword(md5($pass1));
    $usuario->setIdRol($_POST['rol']);
    if($usuario->insertar()){
        
        echo "Usuario insertado";
  }else {
      echo "Error al insertar usuario";
  }
}else {
      echo "La contraseña no coincide.";
  }
}
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
                    
                    <th colspan="2">Datos del Usuario</th>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Confirmar:</td>
                    <td><input type="password" name="confirmar"></td>
                </tr>
                <tr>
                    <td>Rol:</td>
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
