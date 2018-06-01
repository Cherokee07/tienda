<?php

/**
 * Description of usuario
 *
 * @author Galiano
 */
class usuario { 
    private $id;
    private $nombre;
    private $password;
    private $idRol;
    
    function __construct() {
        $this->id=0;
        $this->nombre= "";
        $this->password = "";
        $this->idRol = 0;
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getPassword() {
        return $this->password;
    }

    function getIdRol() {
        return $this->idRol;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }
    public function consulta(){
        return "INSERT INTO usuario (usuario,password,idRol) values('$this->usuario','$this->password','$this->idRol');" ;
    }
    public function listarUsuario(){
        return "SELECT * FROM usuario";
    }
    public function buscarUsuario($id){
        return "SELECT * FROM usuario WHERE id ='$id';";
    }
    public function modificarUsuario(){
        return "UPDATE usuario SET usuario='$this->usuario', password='$this->password', idRol='$this->idRol' WHERE id='$this->id';";
    }

    public function eliminarUsuario($id){
        return "DELETE FROM usuario WHERE id= '$id';";
        
}

     
    function insertar(){
        $consulta = "INSERT INTO usuario (usuario, password, idRol) VALUES ('$this->nombre', '$this->password', '$this->idRol');";
        $conex = new conexion('localhost', 'root', '', 'tienda');
        $conex->conectar();
        $ejecucion = $conex->ejecutar($consulta);
        $conex->desconectar();
        return $ejecucion;
    }
    
    
    public function validar($usuario, $pass){
        $consulta = "SELECT U.idUsuario,U.usuario,u.password,R.nombre AS rol FROM usuario U"
                . " JOIN rol R ON U.idRol=R.idRol "
                . "WHERE usuario = '$usuario' AND password = '$pass';";
        $conex = new conexion('localhost','root','','tienda');
        $conex->conectar();
        $datos = $conex->ejecutar($consulta);
        $conex->desconectar();
        while ($tupla=$datos->fetch_object()){
            if($tupla->usuario==$usuario &&$tupla->password=$pass){
                session_start();
                $_SESSION['usuario']=$tupla->usuario;
                $_SESSION['rol']=$tupla->rol;
            return true;}
            else{
    return false;
            }
        }
        
}}
    //hacer un metodo que compare con el usuario de aqui
     //terminar la clase usuario temas de variables de session, regresando crear menues , se va a evaluar regresando, la parte que ya vimos}
