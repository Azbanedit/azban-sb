<?php
include('../modelo/categoriasModelo.php');
$obj = new Pedidos();
if($_POST){

    $obj->idCategorias = $_POST['idCategorias'];
    $obj->nombreCategorias = $_POST['nombreCategorias'];
}

if(isset($_POST['guarda'])){
    $obj->agregar();
}

if(isset($_POST['modifica'])){
    $obj->modificar();
}

if(isset($_POST['elimina'])){
    $obj->eliminar();
}
if(isset($_POST['limpia'])){
    $obj->limpiar();
}




?>