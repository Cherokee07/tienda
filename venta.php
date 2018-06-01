<?php

/**
 * Description of venta
 *
 * @author Galiano
 */
class venta {
    private $id;
    private $fechaDate;
    private $idCliente;
    private $idUsuario;
    
    
    function __construct() {
        $this->id=0;
        $this->idCliente=0;
        $this->idUsuario=0; 
    }
    function getId() {
        return $this->id;
    }

    function getFechaDate() {
        return $this->fechaDate;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setFechaDate($fechaDate) {
        $this->fechaDate = $fechaDate;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }    
}
