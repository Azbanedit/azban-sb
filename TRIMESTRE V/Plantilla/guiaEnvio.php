<?php
Include("conexion/conectar.php");
$key = $_GET['key'];
echo $key;
$cone = new Conexion();
$c = $cone->conectando();
    $query2="select * from clientes where Id = '$key'";
	$ejecuta2 = mysqli_query($c,$query2);
	$arreglo2 = mysqli_fetch_array($ejecuta2);

    $query4="select * from direcciones where Id = '$key'";
	$ejecuta4 = mysqli_query($c,$query4);
	$arreglo4 = mysqli_fetch_array($ejecuta4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tablas</title>

    <style>
        table,th,td{
        border: 1px solid black;
        border-collapse: collapse;       
     }
    </style>
</head>
<body>

<table class="Default">
    <tr>
        <th rowspan="2">988</th>
        <th>Fredy Guio Peña C.C 1.026.284.779</th>
    </tr>
    <tr>
        <th>Celular 350 204 7721</th>
    </tr>
    <tr>
        <th colspan="2">Destinatario</th>
       
    </tr>
    <tr>
        <th>Nombre</th>
        <td><?php echo $arreglo2[1] ?></td>
    </tr>
    <tr>
        <th>Celular</th>
        <td><?php echo $arreglo2[4] ?></td>
    </tr>
    <tr>
        <th>Ciudad</th>
        <td><?php echo $arreglo4[5]?></td></td>
    </tr>
    <tr>
        <th rowspan="2">Direccion</th>
        <td><?php echo $arreglo4[5]?></td>
    </tr>
    <tr>
        <td><?php echo $arreglo4[1]?></td>
        
    </tr>
    <tr>
        <th colspan="2">DESCRIPCIÓN PRODUCTO</th>
    </tr>
    <tr>
        <td rowspan="2">-BCS-Logos Nasa</td>
        
    </tr>
    <tr>
        
    </tr>


</table>
<button name="imprimir" type="button" onclick="window.print();">Imprimir</button>
  
</body>
</html>
