<?php
    class Clientes{

                    public $idCategorias;
                    public $nombreCategorias;

                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from categorias where nombreCategorias = '$this->nombreCategorias'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('La Categoria ya Existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into categorias value(
                                                                                    '$this->idCategorias',
                                                                                    '$this->nombreCategorias'
                                           )";
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('La Categoria fue Creada en el Sistema')</script>";
                                            
                                        }

                    }

                    function modificar(){

                    }   
                    
                    function eliminar(){

                    }

                    function limpiar(){

                    }
















    }
?>