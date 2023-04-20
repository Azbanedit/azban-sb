<?php
    class Documentos{

        private $codigoDocumento;
        private $nombreDocumento;

        function setCodigoDocumetno($codigoDocumento){
            $this->codigoDocumento = $codigoDocumento;
        }

        function setNombreDocumento($nombreDocumento){
            $this->nombreDocumento = $nombreDocumento;
        }

        function agregar(){
            $query = "select * from documentos where nombreDocumento = '$this->nombreDocumento'";
            $ejecuta = mysqli_query($c, $query);
            if(mysqli_fetch_array($ejecuta)){
                echo"<script> alert('El documento ya existe en el sistema')</script>";
            }
            else {
                $insertar = "insert into documentos value(
                    '$this->codigoDocumento',
                    '$this->nombreDocumento'
                )";
                echo $insertar;
                mysqli_query($c, $insertar);
                echo "<script> alert('El documento fue creado en el sistema') </script>";
            }
        }

        function modificar(){
            $query = "select * from documentos where nombreDocumento = '$this->nombreDocumento'";
            $ejecuta = mysqli_query($c, $query);
            if(!mysqli_fetch_array($ejecuta)){
                echo"<script> alert('El documento NO existe en el sistema')</script>";
            }
            else {
                $query = "UPDATE documentos SET 
                    codigoDocumento ='$this->codigoDocumento',
                    nombreDocumento ='$this->nombreDocumento'
                )";
                echo $query;
                mysqli_query($c, $insertar);
                echo "<script> alert('El documento fue MODIFICADO en el sistema') </script>";
            }
        }
        function eliminar(){
            
        }
        function limpiar(){

        }

    }

?>