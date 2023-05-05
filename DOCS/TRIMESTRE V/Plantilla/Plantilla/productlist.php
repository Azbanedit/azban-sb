<?php
Include("conexion/conectar.php");
if($_POST){
	$Nombre = $_POST['Id'];
}

$cone = new Conexion();
$c = $cone->conectando();
$Query = "select count(*) as totalRegistros from clientes";
$ejecuta = mysqli_query($c,$Query);
$arreglo = mysqli_fetch_array($ejecuta);
$totalRegistros = $arreglo["totalRegistros"];
//echo $totalRegistros;

$maximoRegistros = 5;
if(empty($_GET['pagina'])){
    $pagina=1;
}else{
    $pagina=$_GET['pagina'];
}
$desde = ($pagina-1)*$maximoRegistros;
$totalPaginas=ceil($totalRegistros/$maximoRegistros);
//echo $totalPaginas;
if(isset($_POST['buscar'])){
	
    $query2="select * from clientes where Nombre like '%$Nombre%' limit $desde, $maximoRegistros";
    $ejecuta2 = mysqli_query($c,$query2);
    $arreglo2 = mysqli_fetch_array($ejecuta2);
}else{
	$query2="select * from clientes limit $desde, $maximoRegistros";
	$ejecuta2 = mysqli_query($c,$query2);
	$arreglo2 = mysqli_fetch_array($ejecuta2);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista Pedidos</title>

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
			<form action="" name="listadmin" method="POST">
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-boxes fa-fw"></i> &nbsp; LISTA DE PEDIDOS
				</h3>
				<p class="text-justify">
					Listado,impresión y estado de productos para su actualizacion.
				</p>
			</div>
			<div class="text-center">
				<table class="table ">
					<thead>
						<tr>
							<th class="text-left">
								<button type="button" class="btn btn-dark"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>                   
							
							</th>
							<th class="text-center" >
								<div class="marco">
									<button type="submit" class="btn btn-primary"> <i class="fa fa-list-ul" aria-hidden="true"></i> Listar</button>
									<button type="button" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</button>
								</div>
							</th>
						</tr>
					</thead>
            	</table>
				<br>
				<label for="estado">Tipo de busqueda</label>
				<select name="estado" id="estado">
					<!--<option value="VACIO"></option>-->
					<!--<option value="DOCUMENTO">DOCUMENTO</option>-->
					<!--<option value="ESTADO">ESTADO</option>-->
					<option value="NOMBRE">NOMBRE</option>
					<!--<option value="CODIGO">CODIGO</option>-->
				</select>
				<br>
				<br>
				<div>
					<label >Valor de busqueda</label>
					<form class="justify-content-center" role="search">
						<input type="search" name="Id"  maxlength="60" minlength="1" size="30" placeholder="Valor de busqueda">
						<button class="btn btn-outline-dark"  type="submit" name="buscar" id="buscar">Buscar</button>
					</form>				
				</div>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="product.php"><i class="fas fa-box fa-fw"></i> &nbsp; NUEVO PEDIDO</a>
					</li>
					<li>
						<a class="active" href="productlist.php"><i class="fas fa-boxes fa-fw"></i> &nbsp; LISTA PEDIDOS</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>CODIGO</th>
								<th>NOMBRE</th>
								<th>ESTADO</th>
								<th>PRECIO</th>
								<th>ACTUALIZAR</th>
								<th>DELETE</th>
								<th>CAMBIAR_ESTADO</th>
								<th>IMPRESION DE GUIA</th>
							
				
							</tr>
						</thead>
						<?php

						if($arreglo2==0){
							echo "no hay registros";
						}else{
							do{
						?>

						<tbody>
							<tr class="text-center" >
								<td><?php echo $arreglo2[0]?></td>
								<td><?php echo $arreglo2[1]?></td>
								<td><?php 
								$query4="select * from pedidos where Id_cliente = '$arreglo2[0]'";
								$ejecuta4 = mysqli_query($c,$query4);
								$arreglo4 = mysqli_fetch_array($ejecuta4);

								$query3="select Estado from estado_pedido where Id = '$arreglo4[4]' ";
								$ejecuta3 = mysqli_query($c,$query3);
								$arreglo3 = mysqli_fetch_array($ejecuta3);
								echo $arreglo3[0]?></td>
								<td>$<?php 
								$query8="select Precio_total from pedidos where Id_Cliente = '$arreglo2[0]' ";
								$ejecuta8 = mysqli_query($c,$query8);
								$arreglo8 = mysqli_fetch_array($ejecuta8);
								
								echo $arreglo8[0]?></td>
								<td>
									<button type="button" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>
										
									</button>
								</td>
							
								<td>
									
									<button type="button" class="btn btn-warning">
	  									<i class="far fa-trash-alt"></i>
									</button>
								</td>
					
								<td>
									<label for="estado" value="CAMBIO_ESTADO"></label>
									<select name="estado" id="estado">
										<option value="VACIO"></option>
										<?php
											$query9 = "SELECT * FROM estado_pedido";
											$ejecuta9 = mysqli_query($c,$query9);
											while($arreglo9 = mysqli_fetch_array($ejecuta9)){
										?>
												<option value="<?php echo $arreglo9[0]?>"> <?php echo $arreglo9[1]?> </option>    
										<?php
											}
										?>

									</select>
									<button type="submit" value="ACTUALIZAR">Actualizar</button>
								</td>
								<td>
								<a href="<?php if($arreglo2[0]<>''){
									echo "guiaEnvio.php?key=".urlencode($arreglo2[0]);
								} ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16" type="submit">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            
								</svg>
								</a>
								</td>
							</tr>
							<?php
							}while($arreglo2 = mysqli_fetch_array($ejecuta2));
						}
							?>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<?php 
						if($pagina!=1){
						?>
						<li class="page-item ">
							<a class="page-link" href="?pagina=<?php echo 1; ?>"><</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?php echo $pagina-1; ?>"><<</a>
						</li>
						<?php
						}
						for($i=1; $i<=$totalPaginas; $i++){
							if($i==$pagina){
								echo'<li class="page-item active" aria-current="page"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';    
							}
							else{
								echo'<li class="page-item "><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>'; 
							}
						}
						if($pagina !=$totalPaginas){
						?>
						
						<li class="page-item">
							<a class="page-link" href="?pagina=<?php echo $pagina+1; ?>">>></a>
						</li>
						<li class="page-item">
							<a class="page-link" href="?pagina=<?php echo $totalPaginas; ?>">></a>
						</li>
						<?php
						}
						?>
					</ul>
				</nav>
			</div>
			</form>
		</section>

		<!-- Help Modal -->
		<div class="modal fade" id="ModalHelp" tabindex="-1" role="dialog" aria-labelledby="ModalHelpTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title roboto-medium text-center" id="exampleModalLongTitle">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sunt perferendis magni expedita possimus quidem, ex, culpa totam, sapiente, laboriosam iste fugit accusamus odio! Impedit beatae eveniet asperiores distinctio sunt?
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light roboto-condensed-regular" data-dismiss="modal">Close</button>
					&nbsp;
					<button type="button" class="btn btn-light roboto-condensed-regular">Save changes</button>
				</div>
				</div>
			</div>
		</div>
	</main>
	
	
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