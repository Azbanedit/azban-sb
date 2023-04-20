<?php
Include("conexion/conectar.php");

if($_POST){
	//$Documento = $_POST['Id'];
    $Numero_Documento = $_POST['Numero_Documento'];
}
$cone = new Conexion();
$c = $cone->conectando();
$query = "select * from tipos_documentos";
$ejecuta = mysqli_query($c,$query);



if(isset($_POST['Busca'])){
    /* $cone = new Conexion();
    $c = $cone->conectando(); */
    $query2 = "select * from clientes where Numero_Documento = '$Numero_Documento'";
   // echo $query2;
    $ejecuta2 = mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
    //echo $arreglo2;
    $query1 = "select * from tipos_documentos where Id = '$arreglo2[2]'";
    $ejecuta1 = mysqli_query($c,$query1);
    $arreglo1 = mysqli_fetch_array($ejecuta1);

    $query3="select * from pedidos where Id_cliente = '$arreglo2[0]'";
    $ejecuta3 = mysqli_query($c,$query3);
    $arreglo3 = mysqli_fetch_array($ejecuta3);

    $query4="select * from direcciones where Id_cliente = '$arreglo2[0]'";
    $ejecuta4 = mysqli_query($c,$query4);
    $arreglo4 = mysqli_fetch_array($ejecuta4);

    $query5="select * from departamentos where ID = '$arreglo4[4]'";
	$ejecuta5 = mysqli_query($c,$query5);
	$arreglo5 = mysqli_fetch_array($ejecuta5);
}
else{
    $arreglo2 = ['','','','','','','','',''];
    $arreglo1 = ['','','','','','','','',''];
    $arreglo3 = ['','','','','','','','',''];
    $arreglo4 = ['','','','','','','','',''];
    $arreglo5 = ['','','','','','','','',''];
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ingreso producto</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar1.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						AZBAN <br><small class="roboto-condensed-light">Pagina Transaccional</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Inicio</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-user-tie fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="listadmin.php"><i class="fas fa-users fa-fw"></i> &nbsp; Listado</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-box-open fa-fw"></i> &nbsp; Pedidos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="product.php"><i class="fas fa-box fa-fw"></i> &nbsp; Registro</a></li>
								<li><a href="productlist.php"><i class="fas fa-boxes fa-fw"></i> &nbsp; Listado</a></li>
							</ul>
						</li>

					</ul>
				</nav>
			</div>
		</section>
		<!-- Page content -->
        
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral"><i class="fas fa-exchange-alt"></i></a>
				<a href="#" data-toggle="modal" data-target="#ModalHelp"><i class="far fa-question-circle"></i></a>
				<a href="#"><i class="fas fa-user-cog"></i></a>
				<a href="#" class="btn-exit-system"><i class="fas fa-power-off"></i></a>
			</nav>
            
			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-user-plus fa-fw"></i> &nbsp; REGISTRO DE PEDIDO
				</h3>
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
                <form class="content-center" role="search" method="POST">
                    <input type="text" class="form-control" id="Numero_Documento" name="Numero_Documento" value="" placeholder="Numero de documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                    <button class="buttonColors input-group-text" id="Busca" name="Busca" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="-2 -2 20 20">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </button>
                </form>
				<form action="">
                    <div id="general">
                        <div id="">
                            <!--Registro datos cliente-->
                            
                            <form id="form" method="POST" action="ListadeclientesControlador.php">                     
                                
                                <div class="form-neon">
                                
                                    <label for="factura"><h4>Datos de cliente</h4></label>
                                    <div id="bg-form-group">
                                            <div class="personalInformation">
                                                <div class="row">
                                                    <div class="col-lg-3 selectAsentar">
                                                        <span class="">
                                                            <select class="form-select " id="documentType" name="idTipoDocumento">
                                                                <option selected>Tipo de documento</option>
                                                                <!--<?php 
    
                                                                while($tipoDoc = mysqli_fetch_array($ejecuta)){
    
                                                                ?>
                                                                <option value="<?php $tipoDoc[0] ?>"><?php echo $tipoDoc[1]?></option>
                                                                <?php
                                                                }
                                                                ?>-->
                                        
                                                            </select>
                                                        </span>
                                                    </div>
                                                    <div> <input type="text" class="form-control" id="Id_Tipo_Documento" placeholder="Tipo de documento" name="Id_Tipo_Documento" value="<?php echo $arreglo1[1]?>"></div>     
                                                    <div  class="col-3">
                                                        <div class="input-group">
                                                            
                                                            <form class="justify-content-center" role="search" method="POST">
                                                                <input type="text" class="form-control" id="Numero_Documento" name="Numero_Documento" value="<?php echo $arreglo2[3]?>" placeholder="Numero de documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                
                                                                <button class="buttonColors input-group-text" id="Busca" name="Busca" type="submit">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="-2 -2 20 20">
                                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-6">       
                                                        <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos" name="Nombre" value="<?php echo $arreglo2[1] ?>">   
                                                    </div>
                                                </div>
                    
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control"  id="phone"  placeholder="Celular" value="<?php echo $arreglo2[4] ?>">
                                                    </div>  
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" class="form-control" id="email" placeholder="@gmail.com" value="<?php echo $arreglo2[7] ?>">   
                                                    </div>
                                                </div>
                    
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <select  class="form-select" id="contactType">
                                                            <option selected>Tipo de contacto</option>
                                                            
                                                            <?php
                                                                $query = "SELECT * FROM tipos_contacto";
                                                                $tiposCont = mysqli_query($c,$query);
                                                                while($tipoCont = mysqli_fetch_array($tiposCont)){
                                                            ?>
                                                                    <option value="<?php echo $tipoCont[0]?>"> <?php echo $tipoCont[1]?> </option>    
                                                            <?php
                                                               }
                                                            ?>

                                                        </select>     
                                                    </div>
                                                    <div class="col-12 col-md-3">                    
                                                        <input type="text" class="form-control" id="contact" placeholder="Contacto" value="<?php echo $arreglo2[6] ?>" >
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                    </div>
                                                </div>
                                            </div>
                                        <div class="aling-buttons">
                                            <button type="submit" id="addClient" class="buttonColors btn btn-md listo" >
                                                LISTO
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <br>
                            </form>
                        </div>
                        
                        <form action="" class="form-neon form-producto">
                            <!--Registro de pedido-->
                            <label for="factura"><h4>Registro de producto</h4></label>
                            <div class="form-neon form-pedido">

                                <div id="eliminarPedido">
                                    <button id="botonEliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <select  class="form-select" id="documentType" >
                                            <option selected>Prenda</option>
                                            <?php
                                                $query = "SELECT * FROM productos";
                                                $productos = mysqli_query($c,$query);
                                                while($producto = mysqli_fetch_array($productos)){
                                            ?>
                                                    <option value="<?php echo $producto[0]?>"> <?php echo $producto[1]?> </option>    
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select  class="form-select" id="gender" >
                                            <option selected>Género</option>
                                            <option value="1">Unisex</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select  class="form-select" id="sizeId" >
                                            <option selected>Talla</option>
                                            <?php
                                                $query = "SELECT * FROM tallas";
                                                $tallas = mysqli_query($c,$query);
                                                while($talla = mysqli_fetch_array($tallas)){
                                            ?>
                                                    <option value="<?php echo $talla[0]?>"> <?php echo $talla[1]?> </option>    
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select  class="form-select" id="colorId" >
                                            <option selected>Color</option>
                                            <?php
                                                $query = "SELECT * FROM colores";
                                                $colores = mysqli_query($c,$query);
                                                while($color = mysqli_fetch_array($colores)){
                                            ?>
                                                    <option value="<?php echo $color[0]?>"> <?php echo $color[1]?> </option>    
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <input type="number" class="form-control" placeholder="Cantidad">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4 form-group">
                                        <textarea class="form-control" placeholder="Estampado" id="" rows="1"></textarea>
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <!--<input type="text" class="form-control" id="contact" placeholder="Contacto">
                                        <button class="buttonColors input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                            </svg>
                                        </button>-->
                                        <div class="botonCargar input-group mb-3">
                                            <button class="btn btn-subirImagenes  buttonColors input-group-text" type="button" id="button-addon2">Cargar imagen              
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="cargarIcon bi bi-upload" viewBox="0 0 16 16">
                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 form-group">
                                        <textarea class="form-control" placeholder="Observaciones" id="" rows="1"></textarea>
                                    </div>
                                </div>
                               <div class="pull-right">
                                   <button type="submit" id="addClient" class=" buttonColors btn btn-md" >
                                       Agregar estampado
                                   </button>
                                   
                               </div>
                            </div>
                            <br>
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    AGREGAR PRODUCTO
                                </button>
                                <button type="submit" id="addClient" class="buttonColors btn btn-md listo" >
                                    LISTO
                                </button>
                            </div> 
                        </form>
                        <!--Registro datos de factura-->
                
                        <form action="" class="form-neon">
                            <label for="factura"><h4>Datos de envío</h4></label>
                            <div class="row">
                                <div class="col-2 col-md-1 ">
                                    <input type="text" class="form-control" placeholder="T.D." value="<?php echo $arreglo1[2]?>" >
                                </div>    
                                <div  class="col-10 col-md-3 ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="1013678845" aria-label="Recipient's username" aria-describedby="basic-addon2" value= "<?php echo $arreglo2[3]?>">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 ">       
                                    <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos"value= "<?php echo $arreglo2[1]?>">   
                                </div>
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control"  id="number"  placeholder="# de factura" value= "FAC<?php echo $arreglo3[0]?>">
                                </div> 
                            </div>
                
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control"  id="phone"  placeholder="Dirección" value= "<?php echo $arreglo4[1]?>">
                                </div>  
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control" id="department" placeholder="Departamento"value= "<?php echo $arreglo5[1]?>">   
                                </div>
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control" id="city" placeholder="Municipio"value= "<?php echo $arreglo4[5]?>">   
                                </div>
                            </div>
                            <br>
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    LISTO
                                </button>
                            </div> 
                        </form>
                        <!--Registro de pago-->
                        <form action="" class="form-neon">
                        <label for="factura"><h4>Registrar pago</h4></label>
                            <div class="row">
                                <div class="col-3">
                                    <select  class="form-select" id="TipoPago" >
                                        <option selected>Medio de pago</option>
                                        <option value="1">Nequi</option>
                                        <option value="2">Daviplata</option>
                                    </select> 
                                </div>
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-6 form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Abono
                                            </label>
                                        </div>
                                        <div class="col-6 form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Pago
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <input type="text" class="form-control"  id="pago"  placeholder="Abonado">
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control"  id="place2"  placeholder="Descuento">
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control"  id="place2"  placeholder="Total a pagar">
                                </div>
                            </div>
                            <br>
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    LISTO
                                </button>
                            </div>
                        </form>
                    </div>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class= "buttonColors">CREAR PEDIDO</button>
					</p>
				</form>

			</div>
			

		</section>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>