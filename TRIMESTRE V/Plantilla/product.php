<?php
Include("./Conexion/conectar.php");

if($_POST){
	$Documento = $_POST['Id'];
}
$cone = new Conexion();
$c = $cone->conectando();
$query = "select * from clientes";
$ejecuta = mysqli_query($c,$query);

if(isset($_POST['buscar'])){
	
    $query2="select * from clientes where Numero_Documento like '%$Documento%'";
    $ejecuta2 = mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
}else{
	$query2="select * from clientes limit";
	$ejecuta2 = mysqli_query($c,$query2);
	$arreglo2 = mysqli_fetch_array($ejecuta2);
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
				<form action="" autocomplete="off">
                    <div id="general">
                        <div id="">
                            <!--Registro datos cliente-->
                            
                            
                            <form id="form" method="POST">
                                <div  id="titleDataClient">
                                    <label for="factura"><h4 ><strong>Datos de cliente</strong></h4></label>
                                    
                                </div>
                                <br>                                
                                <div class="form-neon">
                                    <div id="bg-form-group">
                                            <div class="personalInformation">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <select class="form-select" id="documentType" name="idTipoDocumento">
                                                            <option selected>Tipo de documento</option>
                                                            <?php 

                                                            while($tipoDoc = mysqli_fetch_array($ejecuta)){

                                                            ?>
                                                            <option value="<?php $tipoDoc[0] ?>"><?php echo $tipoDoc[1]?></option>
                                                            <?php
                                                            }
                                                            ?>
                                    
                                                        </select>
                                                    </div>     
                                                    <div  class="col-3">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Numero de documento" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        </div>
                                                    </div>
                                                    <div class="col-1 input-group-append" >
                                                        <button class="buttonColors input-group-text" id="basic-search">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="-2 -2 20 20">
                                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="col-6">       
                                                        <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos" name="<?php echo $arreglo2[0] ?>">   
                                                    </div>
                                                </div>
                    
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" class="form-control"  id="phone"  placeholder="Celular">
                                                    </div>  
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" class="form-control" id="email" placeholder="@gmail.com">   
                                                    </div>
                                                </div>
                    
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <select  class="form-select" id="contactType" >
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
                                                        <input type="text" class="form-control" id="contact" placeholder="Contacto">
                                                    </div>
                                                    <div class="col-12 col-md-6">

                                                    </div>
                                                </div>
                                            </div>
                    
                                        <div class="aling-buttons">
                                            <button type="submit" id="buscar" class="buttonColors btn btn-md" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </button>
                                            <button class="buttonColors btn btn-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                        <form action="" class="form-neon ">
                            <!--Registro de pedido-->
                            <label for="factura"><h4>Registro de producto</h4></label>
                            <div id="eliminarPedido">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
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
                                <div  class="col-12 col-md-4 ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Imagen" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append" >
                                            <button class="buttonColors input-group-text" id="basic-search">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4  form-group">
                                    <textarea class="form-control" placeholder="Observaciones" id="" rows="1"></textarea>
                                </div>
                            </div>
                           <div class="pull-right">
                               <button type="submit" id="addClient" class=" buttonColors btn btn-md" >
                                   Agregar estampado
                               </button>
                               
                           </div>
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                </button>
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                    </svg>
                                </button>
                            </div> 
                        </form>
                        <!--Registro datos de factura-->
                
                        <form action="" class="form-neon">
                            <label for="factura"><h4>Datos de envío</h4></label>
                            <div class="row">
                                <div class="col-2 col-md-1 ">
                                    <input type="text" class="form-control" placeholder="CC">
                                </div>    
                                <div  class="col-10 col-md-3 ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="1013678845" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 ">       
                                    <input type="text" class="form-control" id="name" placeholder="Nombre y apellidos">   
                                </div>
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control"  id="number"  placeholder="# de factura">
                                </div> 
                            </div>
                
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control"  id="phone"  placeholder="Dirección">
                                </div>  
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control" id="department" placeholder="Departamento">   
                                </div>
                                <div class="col-12 col-md-4 ">
                                    <input type="text" class="form-control" id="city" placeholder="Municipio">   
                                </div>
                            </div>
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    Generar factura
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
                
                            <div class="aling-buttons">
                                <button type="submit" id="addClient" class="buttonColors btn btn-md" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
					<br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn-outline-danger"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
						&nbsp; &nbsp;
						<button type="submit" class= "btn-outline-success"><i class="far fa-save"></i> &nbsp; Guardar</button>
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