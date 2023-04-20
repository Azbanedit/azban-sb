<?php 
    class Conexion{
        private $servidor="localhost";
        private $usuario="root";
        private $clave="";
        private $db="AZBAN_SB";

        public function conectando(){
            $con = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->db) or die("Error al conectar con el servidor");
            return $con;
        }
    }
   /* $obj=new Conexion();
        if($obj->conectando()){
            echo "conectado al servidor";
        }*/
?>