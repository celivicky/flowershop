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
    <title>Carrito - Floreria Doña Beatriz Online</title>  
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
						<li class="nav-item "><a class="nav-link" href="tienda.php">Tienda</a></li>
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
					<h1>Carrito de compras</h1>
				</div>
			</div>
		</div>
	</div>


	<!-- Start blog -->
<div class="blog-box">
 <div class="container">
  <div class="row">
  	<div class="card-content table-responsive">
  		<table class="table table-hover">
  			<thead class="text-primary">
  				<tr>
	              <th>Productos</th>
	              <th>Precio</th>
	              <th>Cantidad</th>
	              <th>Subtotal</th>
	              <th></th>
	          </tr>
  			</thead>
  			<tbody>
  				<tr>
  					 <?php
     
      $id = $_SESSION['id'];
      $grand_total = 0;
      $select_cart = $connect->prepare("SELECT cart.idv, cart.user_id,productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro where cart.user_id = '$id';");
       $select_cart->execute();
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   	<td><?= $fetch_cart['nompro']; ?></td>
    <td>Bs/<?= $fetch_cart['prec1']; ?></td>
    <td>
        <form action="" method="POST">
              <div class="form-group">
                 <input type="hidden" name="prdt" value="<?= $fetch_cart['idv']; ?>">
                   <input type="number" name="p_qty" value="<?= $fetch_cart['quantity']; ?>" style="width:100px;" min="1" max="99" class="form-control" placeholder="Cantidad">
                 </div>
            <button type="submit" name="update_qty" class="btn btn-danger"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
        </form>	
    </td>
    <td><span>Bs/<?php echo number_format($sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']), 2); ?></span></td>


        <td>

        <form action="" method="POST">
          <input type="hidden" name="prdt" value="<?= $fetch_cart['idv']; ?>">
          <button type="submit" name="delete_qty" class="btn btn-danger"> <i class="fa fa-times" aria-hidden="true"></i></button>  
        </form>
  
    </td>
  					
  				</tr>
  			</tbody>
	            <?php
      $grand_total += $sub_total;
      }
   }else{
      echo '<p class="alert alert-warning">Tu carrito esta vació</p>';
   }
   ?>
  		</table>



<?php
    //require_once('../../backend/config/Conexion.php');
    //session_start(); // Make sure to start the session
    $user_id = $_SESSION['id'];
    $cart_grand_total = 0;

    // Assuming $connect is your PDO connection
    $select_cart_items = $connect->prepare("SELECT cart.idv, cart.user_id, productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro WHERE cart.user_id = :user_id");
    $select_cart_items->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $select_cart_items->execute();

    if ($select_cart_items->rowCount() > 0) {
        while ($fetch_cart_items = $select_cart_items->fetch(PDO::FETCH_ASSOC)) {
            $cart_total_price = ($fetch_cart_items['prec1'] * $fetch_cart_items['quantity']);
            $cart_grand_total += $cart_total_price;
            // Display individual cart item details here if needed
        }

        // Display total price outside the loop
        ?>



        <h1 style="font-size:42px; color:#000000;"><strong>Subtotal del carrito:  </strong></h1>

	    <table class="table table-hover">
	<thead class="text-primary">
		<tr>
			<th><center>SUBTOTAL</center></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><center>$/<?php echo number_format($cart_grand_total, 2); ?></center></td>
			
			
		</tr>
	</tbody>
		</table>
        <?php
    } else {
        
    }
?>


<button class="btn btn-common disabled" type="button" onclick="window.location.href='finalizar_compra.php';"  style="pointer-events: all; cursor: pointer;"> Finalizar compra</button>
  	</div>
  </div>
 </div>
</div>
	<!-- End blog -->
		
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
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
							800, Lorem Street, US
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
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
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
    <script src="../../backend/js/reenvio.js"></script>
    <script type="text/javascript" src="../../backend/js/sweetalert.js"></script>
    <?php
    include_once '../../backend/php/st_updcart_clie.php'
?>
<?php
    include_once '../../backend/php/st_deletcart_clie.php'
?>
</body>
</html>
	
<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>
