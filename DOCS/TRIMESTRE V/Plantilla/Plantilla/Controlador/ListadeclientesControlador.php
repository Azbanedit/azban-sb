<?php
include('../modelo/categoriasModelo.php');
$cliente;

if($_POST){
    $cliente = new Clientes($_POST['idTipoDocumento'],
                            $_POST['numeroDocumento'],
                            $_POST['nombre'],
                            $_POST['celular'],
                            $_POST['idTipoContacto'],
                            $_POST['datoTipoContacto'],
                            $_POST['email'],
                            $_POST['fechaCreacion']);
}
else {
    $cliente = new Cliente();
}

if(isset($_POST['guarda'])){
    $cliente->agregar();
}

if(isset($_POST['modifica'])){
    $cliente->modificar();
}

if(isset($_POST['elimina'])){
    $cliente->eliminar();
}
if(isset($_POST['limpia'])){
    $cliente->limpiar();
}




?>