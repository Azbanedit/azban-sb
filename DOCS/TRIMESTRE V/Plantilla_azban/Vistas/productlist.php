<?php
Include("../Conexion/conectar.php");

$cone = new Conexion();
$c = $cone->conectando();
$query = "select * from clientes";
$ejecuta = mysqli_query($c,$query);
$arreglo = mysqli_fetch_array($ejecuta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista Productos</title>

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
							<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-user-tie fa-fw"></i> &nbsp; Administrator <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="admin.html"><i class="fas fa-user-plus fa-fw"></i> &nbsp; New admin</a></li>
								<li><a href="listadmin.php"><i class="fas fa-users fa-fw"></i> &nbsp; Lista Clientes</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-box-open fa-fw"></i> &nbsp; Products <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="product.html"><i class="fas fa-box fa-fw"></i> &nbsp; New product</a></li>
								<li><a href="productlist.php"><i class="fas fa-boxes fa-fw"></i> &nbsp; Lista Productos</a></li>
							</ul>
						</li>

						<li>
							<a href="base.html"><i class="fas fa-columns fa-fw"></i> &nbsp; Base template</a>
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
					<i class="fas fa-boxes fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
				</h3>
				<p class="text-justify">
					Listado y estado de productos para su actualizacion.
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
					<option value="VACIO"></option>
					<option value="DOCUMENTO">DOCUMENTO</option>
					<option value="ESTADO">ESTADO</option>
					<option value="NOMBRE">NOMBRE</option>
					<option value="CODIGO">CODIGO</option>
				</select>
				<br>
				<br>
				<div>
					<label for="FIND">Valor de busqueda</label>
           			<input type="text" name="find" id="find" maxlength="60" minlength="10" size="30" placeholder="Valor de busqueda" autofocus required>
					<button class="btn btn-outline-dark"  type="submit" name="buscar" id="buscar"> Buscar</button>
				</div>
			</div>
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="product.html"><i class="fas fa-box fa-fw"></i> &nbsp; NUEVO_PRODUCTO</a>
					</li>
					<li>
						<a class="active" href="productlist.html"><i class="fas fa-boxes fa-fw"></i> &nbsp; LISTA_PRODUCTOS</a>
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
							</tr>
						</thead>
						<?php

						if($arreglo==0){
							echo "no hay registros";
						}else{
							do{
						?>

						<tbody>
							<tr class="text-center" >
								<td><?php echo $arreglo[0]?></td>
								<td><?php echo $arreglo[1]?></td>
								<td><?php echo $arreglo[2]?></td>
								<td><?php echo $arreglo[3]?></td>
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
									<label for="estado">CAMBIO_ESTADO</label>
									<select name="estado" id="estado">
										<option value="VACIO"></option>
										<?php
											$query = "SELECT estado FROM estado_pedido ORDER BY id";
											$estados = mysqli_query($c,$query);
											while($estado = mysqli_fetch_array($estados)){
										?>
												<!-- <option value="PRODUCCION">PRODUCCION</option> -->
												<option value="<?php echo $estado[0]?>" ><?php echo $estado[0]?></option>
												
										<?php
											}
										?>
									</select>
									<button type="submit" value="ACTUALIZAR">Actualizar</button>
								</td>
							</tr>
							<?php
							}while($arreglo = mysqli_fetch_array($ejecuta));
						}
							?>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>

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