<?php
session_start();
    if (isset($_SESSION['id'])){
        header('Location: administrador/escritorio.php');
    } 
include_once '../backend/php/ctlogx.php'
 ?>
<!DOCTYPE html>
<html lang="es"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Registro - Floreria Doña Beatriz Online</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../backend/images/favicon.png" type="image/x-icon">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../backend/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../backend/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../backend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../backend/css/custom.css">


</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="../backend/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item "><a class="nav-link" href="nosotros.php">Nosotros</a></li>
						<li class="nav-item"><a class="nav-link" href="delivery.php">Delivery</a></li>
						<li class="nav-item"><a class="nav-link" href="tienda.php">Tienda</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Categorias</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
																<?php
 $sentencia = $connect->prepare("SELECT * FROM categoria order by idcat desc;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>  
   	<?php foreach($data as $gcc):?>
								<a class="dropdown-item" href="categoria.php?id=<?php echo  $gcc->idcat; ?>"><?php echo  $gcc->nomcat; ?></a>
								
								   	<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" href="#new"><i class="fa fa-user" aria-hidden="true"></i>
							</a>
						</li>	
							
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
		<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Crear una cuenta nueva</h1>
				</div>
			</div>
		</div>
	</div>

		<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
							<div class="row">
								
								<div class="col-md-6">
									<h3>Datos del acceso</h3>
									
									<div class="col-md-12">
										<div class="form-group">
											<input id="input_text"  class="text picker__input form-control" required name="txtcorr" type="email"  data-error="Campo obligatorio" placeholder="Correo electrónico">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input id="input_password" type="password" name="txtpass" class="password form-control picker__input" required data-error="Campo obligatorio" placeholder="Contraseña">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									
								</div>

								<div class="col-md-6">
									<h3>Datos personales</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="" name="txtname" placeholder="Nombre" required data-error="Campo obligatorio">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Apellidos" id="" class="form-control" name="txtapel" required data-error="Campo obligatorio">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Teléfono" id="" class="form-control" name="txtpho" required data-error="Campo obligatorio">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>

								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" name='stadddcust'>Registrate</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>

							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	

	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
						02127845312
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
						Centro comercial multiplaza Victoria piso 1, entre la Av Victoria y la av Nueva Granada
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Sobre nosotros</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Horarios</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Informacion contacto</h3>
					<p class="lead">Centro comercial multiplaza Victoria piso 1, entre la Av Victoria y la av Nueva Granada</p>
					<p class="lead"><a href="#">+58 414 85 45 217</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Reservados todos los derechos. &copy; 2024 <a href="#">Floreria Doña Beatriz Online</a> </p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	<?php include('../backend/modal/modauser.php'); ?>
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="../backend/js/jquery-3.2.1.min.js"></script>
	<script src="../backend/js/popper.min.js"></script>
	<script src="../backend/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../backend/js/jquery.superslides.min.js"></script>
	<script src="../backend/js/images-loded.min.js"></script>
	<script src="../backend/js/isotope.min.js"></script>
	<script src="../backend/js/baguetteBox.min.js"></script>
	<script src="../backend/js/form-validator.min.js"></script>
    <script src="../backend/js/contact-form-script.js"></script>
    <script src="../backend/js/custom.js"></script>
    <script src="../backend/js/reenvio.js"></script>
    <script type="text/javascript" src="../backend/js/sweetalert.js"></script>
    <?php
    include_once '../backend/php/st_adddcustocli.php'
?>
</body>
</html>