<?php



class conexion { private $host;
    private $usr;
    private $pwd;
    private $db;
    private $conn;
    function __construct($host, $usr, $pwd, $db) {
        $this->host = "localhost";
        $this->usr = "rosa";
        $this->pwd = "root";
        $this->db = "tienda";
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


