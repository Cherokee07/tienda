<?php

/**
 * Description of detalleVenta
 *
 * @author Galiano
 */
class detalleVenta {
private $idProducto;
private $idVenta;
private $cantidad;
private $precio;
function __construct() {
    $this->idProducto=0;
    $this->idVenta=0;
    $this->cantidad=0;
    $this->precio=0;
    
    
}
function getIdProducto() {
    return $this->idProducto;
}

function getIdVenta() {
    return $this->idVenta;
}

function getCantidad() {
    return $this->cantidad;
}

function getPrecio() {
    return $this->precio;
}
function setIdProducto($idProducto) {
    $this->idProducto = $idProducto;
}

function setIdVenta($idVenta) {
    $this->idVenta = $idVenta;
}

function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
}

function setPrecio($precio) {
    $this->precio = $precio;
}



}
