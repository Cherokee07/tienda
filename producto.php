<?php
/**
 * Description of producto
 *
 * @author Galiano
 */
class producto {
   private $id;
   private $nombre;
   private $marca;
   private $genero;
   private $talla;
   private $precio;
   private $existencia;
   function __construct() {
       $this->id=null;
       $this->nombre="";
       $this->marca="";
       $this->genero="";
       $this->talla=0;
       $this->precio=0;
       $this->existencia=0;
       
   }
   function getId() {
       return $this->id;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getMarca() {
       return $this->marca;
   }

   function getGenero() {
       return $this->genero;
   }

   function getTalla() {
       return $this->talla;
   }

   function getPrecio() {
       return $this->precio;
   }

   function getExistencia() {
       return $this->existencia;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setMarca($marca) {
       $this->marca = $marca;
   }

   function setGenero($genero) {
       $this->genero = $genero;
   }

   function setTalla($talla) {
       $this->talla = $talla;
   }

   function setPrecio($precio) {
       $this->precio = $precio;
   }

   function setExistencia($existencia) {
       $this->existencia = $existencia;
   }

    public function consulta(){
        return "INSERT INTO producto (nombre,marca,genero,talla,precio,existencia) values('$this->nombre','$this->marca','$this->genero','$this->talla','$this->precio','$this->existencia');" ;
    }
    public function listarProducto(){
        return "SELECT * FROM Producto";
    }
    public function buscarProducto($id){
        return "SELECT * FROM producto WHERE id ='$id';";
    }
    public function modificarProducto(){
        return "UPDATE producto SET nombre='$this->nombre',"
                . " marca='$this->marca',"
                . "genero='$this->genero', "
                . "talla='$this->talla',"
                . " precio='$this->precio', "
                . "existencia='$this->existencia' WHERE id='$this->id';";
    }

    public function eliminarProducto($id){
        return "DELETE FROM producto WHERE id= '$id';";
        

}}