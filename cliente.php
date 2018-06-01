<?php

/**
 * Description of cliente
 *
 * @author Galiano
 */
class cliente {
private $id;
private $nombre;
private $RFC;
function __construct() {
    $this->id=null;
    $this->nombre="";
    $this->RFC="";

}

function getId() {
    return $this->id;
}

function getNombre() {
    return $this->nombre;
}

function getRFC() {
    return $this->RFC;
}

function setId($id) {
    $this->id = $id;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setRFC($RFC) {
    $this->RFC = $RFC;
}





    
}
