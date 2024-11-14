<?php
ob_start();
     session_start();
         if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 2){
    header('location: ../erro404.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>

	<!DOCTYPE html>
<html lang="es"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Mis perfil - Floreria Doña Beatriz Online</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../backend/images/favicon.png" type="image/x-icon">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../../backend/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../backend/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../backend/css/custom.css">

            <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/buttonsdataTables.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/font.css">


</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="../../backend/images/logo.png" alt="" />
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
																require '../../backend/bd/ctconex.php'; 
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
							<a class="nav-link" href="perfil.php"><i class="fa fa-user" aria-hidden="true"></i>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<?php
								$id = $_SESSION['id']; 
        $sql = "SELECT  COUNT(*) total, cart.user_id FROM cart where cart.user_id = '$id';";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
								(<?php echo  $total; ?>)
							</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="#new" data-toggle="modal"><i class="fa fa-power-off" aria-hidden="true"></i>
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
					<h1>Mi perfil</h1>
				</div>
			</div>
		</div>
	</div>

		
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-12">
			<div class="blog-inner-details-page">
				<div class="blog-inner-box"> 
					<h1 style="margin-top: 20px"><strong><center>Datos del cliente</center></strong></h1>

					<div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Nombres</label>
            <input type="text" disabled="" value="<?php echo $_SESSION['usuario'] ?>"  class="form-control"  id="" name="" placeholder="ejmp: perfil01@gmail.com">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
</div>

<div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Apellidos</label>
            <input type="text" disabled  value="<?php echo $_SESSION['nombre'] ?>" class="form-control"  id="" name="" placeholder="ejmp: perfil01@gmail.com">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
</div>

<div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Correo electronico </label>
            <input type="text" disabled  class="form-control" value="<?php echo $_SESSION['correo'] ?>"  id="" name="" placeholder="ejmp: perfil01@gmail.com">
            <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="txtidcli">
            <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="txtidsur">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
</div>

				</div>
			</div>
		</div>
	</div>

	
		<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Mis productos</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
				<div class="card-content table-responsive">
					<?php
            $id = $_SESSION['id'];    
 $sentencia = $connect->prepare("SELECT orders.method,orders.idord, orders.user_id, clientes.idclie, clientes.nomclie, clientes.apeclie,clientes.telclie, clientes.correo, orders.total_products, orders.total_price, orders.placed_on, orders.payment_status, orders.tipc, orders.ourentre, orders.tiemp, orders.distri, orders.direcenvio, orders.refer, orders.deen, orders.paren, orders.mendedi,sitios.idsit, sitios.nomsi, sitios.detsi, sitios.precsiti ,orders.foto FROM orders INNER JOIN clientes ON orders.user_cli = clientes.idclie INNER JOIN sitios ON orders.idsit = sitios.idsit  where clientes.idclie = '$id' ORDER BY orders.idord DESC ;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
					<table class="table table-hover" id="example">
						<thead class="text-primary">
							<tr>
								<th>Opciones</th>
								<th>Nombres</th>
								<th>Apellidos</th>
								
								<th>Metodo de pago</th>
								<th>Comprobante</th>
								<th>Productos</th>
								<th>Fecha entrega</th>
								<th>Horario entrega</th>
								<th>Total</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							 <?php foreach($data as $g):?>
							<tr>
								<td>
                      
                <a class="btn btn-primary text-white" data-toggle="modal" href="#info_<?php echo  $g->idord; ?>"><i class='fa fa-info-circle' data-toggle='tooltip' title='description'></i></a>
                <a class="btn btn-danger text-white" href="../pdf/pdf_ticket_delivery_clie.php?id=<?php echo  $g->idord; ?>"><i class='fa fa-file-pdf-o' data-toggle='tooltip' title=''></i></a>

                
                


                  
                          
                </td>
								<td><?php echo  $g->nomclie; ?></td>
								<td><?php echo  $g->apeclie; ?></td>
								<td><?php echo  $g->tipc; ?></td>
								<td><?php echo  $g->method; ?></td>
								<td><?php echo  $g->total_products; ?></td>
								<td><?php echo  $g->ourentre; ?></td>
								<td><?php echo  $g->tiemp; ?></td>
								<td><?php echo  $g->total_price; ?></td>
								<td><?php    if($g->payment_status =='Atendido')  { ?> 

    <span class="badge badge-success">Atendido</span>
               <?php  }   else {?> 
    <span class="badge badge-warning" style="color: white;">Pendiente</span>
     <?php  } ?> </td>
							</tr>
							<?php include '../../backend/modal/mdaeditdelivcli.php';  ?>
							 <?php endforeach; ?>
						</tbody>
					</table>
					<?php else:?>
        <!-- Warning Alert -->
<div class="alert alert-warning" role="alert">
  No se encontró ningún dato!
</div>
    <?php endif; ?>  
				</div>

			</div>
		</div>
	</div>
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							
						</p>02127845312
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
	<?php include('../../backend/modal/modacerrar.php'); ?>
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="../../backend/js/jquery-3.2.1.min.js"></script>
	<script src="../../backend/js/popper.min.js"></script>
	<script src="../../backend/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../../backend/js/jquery.superslides.min.js"></script>
	<script src="../../backend/js/images-loded.min.js"></script>
	<script src="../../backend/js/isotope.min.js"></script>
	<script src="../../backend/js/baguetteBox.min.js"></script>
	<script src="../../backend/js/form-validator.min.js"></script>
    <script src="../../backend/js/contact-form-script.js"></script>
    <script src="../../backend/js/custom.js"></script>


    <!-- Data Tables -->
    <script type="text/javascript" src="../../backend/js/datatable.js"></script>
    <script type="text/javascript" src="../../backend/js/datatablebuttons.js"></script>
    <script type="text/javascript" src="../../backend/js/jszip.js"></script>
    <script type="text/javascript" src="../../backend/js/pdfmake.js"></script>
    <script type="text/javascript" src="../../backend/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonshtml5.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonsprint.js"></script>	
   <script type="text/javascript" src="../../backend/js/example.js"></script>
</body>
</html>

<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>
