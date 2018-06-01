<?php


/**
 * Description of rol
 *
 * @author Galiano
 */
class rol {
  private $idRol;
    private $nombre;
    private $descripcion;
    
    function __construct() {
        $this->id=null;
        $this->nombre="";
        $this->descripcion="";
        
    }
    function getIdRol() {
        return $this->idRol;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


    function listar(){
        $consulta = "SELECT * FROM rol;";
        $conexion = new conexion('localhost', 'root','', 'tienda');
        $conexion->conectar();
        $datos = $conexion->ejecutar($consulta);
        $conexion->desconectar();
        return $datos;
    }

}
