
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
    <title>Inicio - Floreria Doña Beatriz Online</title>  
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
						<li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<?php
 $sentencia = $connect->prepare("SELECT * FROM slider;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>  
   	<?php foreach($data as $g):?>
			<li class="text-center">
				<img src="../backend/images/subidas/<?php echo  $g->foto; ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong><?php echo  $g->nomsl; ?></strong></h1>
							<p class="m-b-40"><?php echo  $g->detas; ?></p>
							
						</div>
					</div>
				</div>
			</li>
<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
			
		

		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="https://placehold.co/800x650.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Bienvenido a <span>Floreria Doña Beatriz Online</span></h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Nosotros</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit."
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Promociones Exclusivas Black Friday</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			
				
			<div class="row special-list">
				
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
   	<?php foreach($data as $a):?>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="https://placehold.co/800x480.png" class="img-fluid" alt="Image">
						<div class="date-blog-up">
									!OFERTA¡
						</div>
						<div class="why-text">
							<h4><?php echo  $a->nompro; ?></h4>
							
							<h5> $/<?php echo  $a->prec1; ?></h5>

						</div>
					</div>
					
					<button class="btn btn-common disabled" onclick="window.location.href='registro.php';" type="button" style="pointer-events: all; cursor: pointer;"> Añadir al carrito</button>
				</div>
				
			   	<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>OCASIONES</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
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
   	<?php foreach($data as $y):?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="categoria.php?id=<?php echo  $y->idcat; ?>" style="cursor: pointer;">
							<img class="img-fluid" src="https://images.pexels.com/photos/20413733/pexels-photo-20413733/free-photo-of-flores-lujo-colorido-de-colores.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery Images">
							
						</a>
					</div>
   	<?php endforeach; ?>
   	    <?php else:?>
        <!-- Warning Alert -->
    <?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->

	<!-- End Customer Reviews -->
	
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
    <script type="text/javascript" src="../backend/js/reenvio.js"></script>
</body>
</html>