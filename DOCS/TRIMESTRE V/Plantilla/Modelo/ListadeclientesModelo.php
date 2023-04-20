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

                     function buscar(){

                           $conet = new Conexion();
                           $c = $conet->conectando();
                           $query = "select * from Clientes where Id_Tipo_Documento = '$this->idTipoDocumento' and Numero_Documento = '$this->numeroDocumento'";
                           $ejecuta = mysqli_query($c, $query);
                           if(mysqli_fetch_array($ejecuta)){
                             return true;
                           }else{
                              return false;
                           }
                     
                     }

                    function agregar(){
                                        if(buscar()){
                                           echo "<script> alert('El cliente ya existe en el Sistema')</script>";
                                        }else{
                                           $insertar = "
                                           INSERT INTO clientes (Nombre, 
                                             Id_Tipo_Documento, 
                                             Numero_Documento, 
                                             Celular, 
                                             Id_Tipo_Contacto, 
                                             Dato_Tipo_Contacto, 
                                             Email, 
                                             Fecha_creacion)

	                                          VALUES ('$this->nombre',
                                              '$this->idTipoDocumento', 
                                              '$this->numeroDocumento', 
                                              '$this->celular', 
                                              '$this->idTipoContacto', 
                                              '$this->datoTipoContacto', 
                                              '$this->email',
                                              '$this->fecha_creacion')";
                                           
                                           
                                           echo $insertar;
                                           mysqli_query($c,$insertar);
                                           echo "<script> alert('El cliente ha sido creado')</script>";
                                            
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