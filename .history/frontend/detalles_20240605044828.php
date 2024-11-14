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
    <title>Detalles - Floreria Doña Beatriz Online</title>  
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
						<li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
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
					<h1>Detalles</h1>
				</div>
			</div>
		</div>
	</div>


		<!-- Start blog details -->
	<div class="blog-box">
		<div class="container">
			
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
					<div class="blog-inner-details-page">
						<?php
									 $id = $_GET['id'];
 $sentencia = $connect->prepare("SELECT productos.idpro, productos.foto,productos.codpro, productos.nompro,productos.detpro, productos.stock, categoria.idcat, categoria.nomcat, productos.prec1, productos.prec2, productos.estado FROM productos INNER JOIN categoria on productos.idcat = categoria.idcat where productos.idpro ='$id';");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>  
   	<?php foreach($data as $y):?>
						<div class="blog-inner-box">
							<div class="side-blog-img">
								<img class="img-fluid" src="https://images.pexels.com/photos/5414320/pexels-photo-5414320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">							
								<div class="date-blog-up">
									!OFERTA¡
								</div>
							</div>
							<div class="inner-blog-detail details-page">
								<h3><?php echo  $y->nompro; ?></h3>
								<ul>
									<li>  

										<span style="font-weight: 700; font-size: 20px;">s/.<?php echo  $y->prec1; ?></span></li>
									
								</ul>
								<p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue, turpis magna tempor odio, a placerat magna tortor a mauris. Phasellus lobortis turpis dui, eget mollis ex vestibulum auctor. Nunc viverra leo ut accumsan aliquet. Maecenas aliquam dolor eget felis bibendum blandit.</p>
								
								
								<span style="font-weight: 700; font-size: 20px;">Disponibles: <?php echo  $y->stock; ?></span>
								<button class="btn btn-common disabled" onclick="window.location.href='registro.php';"  type="button" style="pointer-events: all; cursor: pointer;"> Añadir al carrito</button>
							</div>
						</div>
						   	<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>


						<div class="blog-comment-box">
							<h3>Valoraciones</h3>
							<div class="comment-item">
								<div class="comment-item-left">
									<img src="https://images.pexels.com/photos/5414000/pexels-photo-5414000.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Rubel Ahmed</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									
								</div>
							</div>
							

							<div class="comment-item">
								<div class="comment-item-left">
									<img src="https://images.pexels.com/photos/7275419/pexels-photo-7275419.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Rubel Ahmed</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									
								</div>
							</div>

						</div>


						<div class="comment-respond-box">
							<h3>Sé el primero en valorar “BOX DE HORTENSIAS”</h3>
							<div class="comment-respond-form">
								<form id="commentrespondform" class="comment-form-respond row" method="post">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input id="name_com" class="form-control" name="name" placeholder="Nombre" type="text">
										</div>
										<div class="form-group">
											<input id="email_com" class="form-control" name="email" placeholder="Correo electronico" type="email">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<textarea class="form-control" id="textarea_com" placeholder="Mensaje" rows="2"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<button class="btn btn-submit">Enviar valoracion</button>
									</div>
								</form>
							</div>
						</div>
						
						

					</div>
				</div>
			
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="right-side-blog">
						
						<h3>Categorias</h3>
						<div class="blog-categories">
							<ul>
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
   	<?php foreach($data as $ya):?>
			
			<li><a href="categoria.php?id=<?php echo  $ya->idcat; ?>"><span><?php echo  $ya->nomcat; ?></span></a></li>
								
		<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
							</ul>
						</div>
						<h3>Lo mas vendido</h3>
						<div class="post-box-blog">
							<div class="recent-post-box">
								<?php
 $sentencia = $connect->prepare("SELECT productos.idpro, productos.foto,productos.codpro, productos.nompro,productos.detpro, productos.stock, categoria.idcat, categoria.nomcat, productos.prec1, productos.prec2, productos.estado FROM productos INNER JOIN categoria on productos.idcat = categoria.idcat ORDER BY productos.idpro DESC;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>  
   	<?php foreach($data as $ab):?>
								<div class="recent-box-blog">
									<div class="recent-img">
										<img class="img-fluid" src="https://images.pexels.com/photos/5409759/pexels-photo-5409759.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
									</div>
									<div class="recent-info">
										<ul>
											<li><i class="zmdi zmdi-time"></i>Precio : <span>$/<?php echo  $ab->prec1; ?></span></li>
										</ul>
										<h4><?php echo  $ab->nompro; ?></h4>
									</div>
								</div>

<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
							</div>
						</div>
					

					</div>
				</div>
			
			</div>
		</div>
	</div>
	<!-- End details -->
		
	
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
						Centro comercial multiplaza Victoria piso 1, entre la Av Victoria y la av Nueva Granada


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
</body>
</html>