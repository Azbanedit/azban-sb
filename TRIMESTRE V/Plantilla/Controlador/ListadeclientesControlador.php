<?php
include('../modelo/categoriasModelo.php');
$cliente = new Clientes();
if($_POST){

    $cliente->setIdTipoDocumento($_POST['idTipoDocumento']);
    $cliente->nombreCategorias = $_POST['nombreCategorias'];
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