<?php



class cajero1 {
      private $id;
      private $categoria;
    
      private $marca;
      private $tipo;
      private $precio;
       private $color;
      private $material;
       private $modelo;
      private $talla;
   
     
      function __construct() {
          $this->id=null;
          $this->categoria="";
          $this->marca="";
          $this->tipo="";
          $this->precio="";
          $this->color="";
          $this->material="";
            $this->modelo="";
            $this->talla="";
         
          
      }
      function getId() {
          return $this->id;
      }function getCategoria() {
          return $this->categoria;
      }function getMarca() {
          return $this->marca;
      }function getTipo() {
          return $this->tipo;
      }function getPrecio() {
          return $this->precio;
      }function getColor() {
          return $this->color;
      }function getMaterial() {
          return $this->material;
      }function getModelo() {
          return $this->modelo;
      }function getTalla() {
          return $this->talla;
      }function setId($id) {
          $this->id = $id;
      }function setCategoria($categoria) {
          $this->categoria = $categoria;
      }function setMarca($marca) {
          $this->marca = $marca;
      }function setTipo($tipo) {
          $this->tipo = $tipo;
      }function setPrecio($precio) {
          $this->precio = $precio;
      }function setColor($color) {
          $this->color = $color;
      } function setMaterial($material) {
          $this->material = $material;
      }function setModelo($modelo) {
          $this->modelo = $modelo;
      }function setTalla($talla) {
          $this->talla = $talla;
    
}
    public function consulta(){
        return "INSERT INTO calzado(categoria,marca,tipo,precio,color,material,modelo,talla) 
 values('$this->categoria','$this->marca','$this->tipo','$this->precio','$this->color','$this->material','$this->modelo,'$this->talla');";
        
    }

}


    

        
