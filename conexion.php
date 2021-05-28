<?php
    class Conexion extends PDO{
        private $tipo_de_base="mysql";
        private $host="localhost";
        private $bd="bd_consulta";
        private $user="root";
        private $password="";
        private $conexion=null;
    
        public function __construct() {
            try{
                parent::__construct("{$this->tipo_de_base}:dbname={$this->bd};host={$this->host};charset=utf8", $this->user, $this->password);
            }catch(PDOException $e){
                echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
                exit;
            }
        }    
    }
?>