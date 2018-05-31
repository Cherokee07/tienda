<?php


/**
 * Description of conexion
 *
 * @author Galiano
 */
class conexion { private $host;
    private $usr;
    private $pwd;
    private $db;
    private $conn;
    function __construct($host, $usr, $pwd, $db) {
        $this->host = $host;
        $this->usr = $ust;
        $this->pwd = $pwd;
        $this->db = $db;
    }
    public function conectar(){
        $this->conn = mysqli_connect($this->host, $this->usr, $this->pwd, $this->db);
    }
    public function desconectar(){
        $this->conn->close();
    }
    public function ejecutar($sql){
        return mysqli_query($this->conn,$sql);
    }
}


