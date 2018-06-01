<?php
include 'conexion.php';
include "usuario.php";
if (isset($_POST['usuario'])&& isset($_POST['pass'])){

$user = $_POST['usuario'];
$pass = $_POST['pass'];
$pass = md5($pass);


$usuario =new usuario ();
if($usuario->validar($user, $pass)){
    if($user=="admin"){
    header("location:admin.php");
    }
    
   if($user == "juan"){
       header("location:cajero.php");
   }
   
   if($user == "almacen"){
       header("location:almacen.php");
   }
   if ($user == "gerente"){
       header("location:gerente.php");
   }
  else{
    echo "Usuario INVALIDO, verefinque los datos.";
} }else 
    echo "Datos incorrectos verefique nuevamente y no intente meter inyecciones sql ya que esta protejida";

  }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>BIENVENIDO ADMINISTRADOR</title>
    </head>
    <center>
    <body background="imagen/f3.png" >
        <STYLE> 
BODY { background: url(imagen/fondo.jpg)} 
</STYLE>
     
         <form method="POST">
             <fieldset style="width:100px;">
 <legend><img src="imagen/login.png " width="170" height="130" /></legend>
          <table style="margin: 0 auto">       

        
            <tr>
                <th colspan="2">Iniciar admin</th>
                
            </tr>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                    
                <td colspan="2"><input type="submit" value="Iniciar"></td>
            </tr>
            
        </table>
 
         
    </body>
</html>


