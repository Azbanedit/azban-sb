<?php
    class Clientes{

                    private $idTipoDocumento;
                    private $numeroDocumento;
                    private $nombre;
                    private $celular;
                    private $idTipoContacto;
                    private $datoTipoContacto;
                    private $email;
                    private $fechaCreacion;
                    
                    public function setIdTipoDocumento($idTipoDocumento){
                        $this->idTipoDocumento =  $idTipoDocumento;
                    }

                    public function setNumeroDocumento($numeroDocumento){
                        $this->numeroDocumento = $numeroDocumento;
                    }

                    public function __construct(int $idTipoDocumento,
                                                string $numeroDocumento,
                                                string $nombre,
                                                string $celular,
                                                int $idTipoContacto,
                                                string $datoTipoContacto,
                                                string $email,
                                                string $fechaCreacion
                                                ) {
                     $this->idTipoDocumento = $idTipoDocumento;
                     $this->numeroDocumento = $numeroDocumento;
                     $this->nombre = $nombre;
                     $this->celular = $celular;
                     $this->idTipoContacto = $idTipoContacto;
                     $this->datoTipoContacto = $datoTipoContacto;
                     $this->email = $email;
                     $this->fechaCreacion = $fechaCreacion;

                     }
                     
                    function agregar(){
                                        $conet = new Conexion();
                                        $c = $conet->conectando();
                                        $query = "select * from Clientes where Id_Tipo_Documento = '$this->idTipoDocumento' and Numero_Documento = '$this->numeroDocumento'";
                                        $ejecuta = mysqli_query($c, $query);
                                        if(mysqli_fetch_array($ejecuta)){
                                           echo "<script> alert('El cliente ya existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "insert into Clientes value(
                                                                                    '$this->idTipoDocumento',
                                                                                    '$this->numeroDocumento'
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