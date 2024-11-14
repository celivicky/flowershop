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
    <title>Finalizar compra - Floreria Doña Beatriz Online</title>  
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

    <style type="text/css">
    	#divOculto {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        #divOculto1 {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
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
					<h1>Finalizar compra</h1>
				</div>
			</div>
		</div>
	</div>


	<!-- Start blog -->
<div  class="blog-box">
 <div class="container">
 	<div class="row">
<form autocomplete="off" method="post"  role="form" enctype="multipart/form-data">
<div class="col-xl-12 col-lg-12 col-12">
	<div class="blog-inner-details-page">
		<div class="blog-inner-box">
			
			
				
					<h1><strong>Datos del cliente</strong></h1>
					<div class="row">
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

					</div>

<div class="row">


<div class="col-md-6 col-lg-12">
        <div class="form-group">
            <label for="email2">Correo electronico </label>
            <input type="text" disabled  class="form-control" value="<?php echo $_SESSION['correo'] ?>"  id="" name="" placeholder="ejmp: perfil01@gmail.com">
            <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="txtidcli">
            <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="txtidsur">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
</div>


<div class="col-md-6 col-lg-12">
	<h1><strong>Datos de la entrega</strong></h1>
        <div class="form-group">
            <label for="email2">Fecha de entrega </label>
           
           <input type="date" class="form-control" name="txtfeentre" required="">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
</div>


    <div class="col-md-6 col-lg-12">
   <div class="form-group">
    <label for="email">Horario de entrega</label>
    <select class="form-control" required name="txtourent">
          <option value="">----------Seleccione------------</option>  
            <option value="Mañana: 9am - 2pm">Mañana: 9am - 2pm</option>
            <option value="Tarde: 3pm - 7pm">Tarde: 3pm - 7pm</option>                         
    </select>
</div>   
  </div>


        <div class="col-md-6 col-lg-6">
   <div class="form-group">
    <label for="email">Distrito</label>
    <select class="form-control" required name="txtdistrr">
          <option value="">----------Seleccione------------</option>  
            <option value="Piura">Piura</option>     
            <option value="Castilla">Castilla</option>     
            <option value="Catacaos">Catacaos</option>     
            <option value="Cura mori">Cura mori</option>
            <option value="El tallan">El tallan</option>
            <option value="La arena">La arena</option>
            <option value="Las lomas">Las lomas</option>  
            <option value="Tambogrande">Tambogrande</option> 
            <option value="Veintiseis de octubre">Veintiseis de octubre</option>                         
    </select>
</div>   
  </div>


  <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Direccion</label>
    <input type="text"   class="form-control"   name="txtdirecc" required >
   
</div>
  </div>


      <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Referencia</label>
    <input type="text"   class="form-control"   name="txtreff" required >
   
</div>
  </div>

 <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">De</label>
    <input type="text"   class="form-control"   name="txtdee" required >
   
</div>
  </div>


 <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Para</label>
    <input type="text"   class="form-control"   name="txtparaa" required >
   
</div>
  </div>


            <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Mensaje (dedicatoria)</label>
    <input type="text"   class="form-control"   name="txtdedi" required >
   
</div>
  </div>



              <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Comprobante</label>
    <select class="form-control" required name="txtcompr">
         
            <option value="Ticket">Ticket</option>                         
    </select>
   
</div>
  </div>


                <div class="col-md-6 col-lg-6">
      <div class="form-group">
    <label for="email">Tipo de pago</label>
    <select class="form-control" required name="txttppg" id="txttppg" onchange="mostrarDiv()">
         	<option value="">----------Seleccione------------</option>  
            <option value="Yape">Yape</option>   
                                   
    </select>
   
</div>
  </div>


          <div class="col-md-12 col-lg-12" id="divOculto">
            <!-- Contenido del div que se mostrará/ocultará -->
            
            <div class="form-group">
            	<label for="email">Captura yape</label>
            	<img class="img-fluid" src="https://placehold.co/600x300.png" alt="">
            </div>
        </div>


                  <div class="col-md-12 col-lg-12" id="divOculto1">
            <!-- Contenido del div que se mostrará/ocultará -->
            
            <div class="form-group">
            	<label for="email">Captura yape</label>
            	<img id="blah"  width="900" heigth="900" alt="your image" style="max-width:190px;" />
            	<input type="file"  required id="imagen" name="foto" onchange="readURL(this);" data-toggle="tooltip">
            </div>
        </div>



</div>
				
			


		</div>
	</div>
</div>

	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 blog-sidebar">
		<div class="right-side-blog">
			<h3>Tu pedido</h3>
		</div>

		<table class="table table-hover">
			<thead class="text-primary">
				<tr>
					<th>Producto</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				    <?php
      require_once('../../backend/bd/ctconex.php');
      $id = $_SESSION['id'];
      $grand_total = 0;
      $select_cart = $connect->prepare("SELECT cart.idv, cart.user_id,productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro where cart.user_id = '$id';");
       $select_cart->execute();
      if($select_cart->rowCount() > 0){
         while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){ 
   ?>

				<tr>
					<td>
						<?= $fetch_cart['nompro']; ?>  <strong>x <?= $fetch_cart['quantity']; ?></strong>
						<input type="hidden" value="<?= $fetch_cart['idpro']; ?>" name="stpro">	
						<input type="hidden" value="<?= $fetch_cart['idpro']; ?>" name="product1[]">
						<input type="hidden" value="<?= $fetch_cart['quantity']; ?>" name="canti[]">
   						<input type="hidden" value="<?= $fetch_cart['idv']; ?>" name="idcart">


					</td>   
					<td><span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></span></td>
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



        <h1 style="font-size:42px; color:#000000;"><strong>SUBTOTAL:  </strong></h1>

	    <table class="table table-hover">
	<thead class="text-primary">
		<tr>
			<th><center>SUBTOTAL</center></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><center>s/<?php echo number_format($cart_grand_total, 2); ?></center></td>
			
			
		</tr>
	</tbody>
		</table>
        <?php
    } else {
        
    }
?>


	            <div class="col-md-6 col-lg-12">
      <div class="form-group">
    <label for="email">Adicional del envio</label>
    
   	<select class="form-control" id="sitio" name="sitio" required="">
   		<option value="">----------Seleccione------------</option>  
   		<?php
           
            $stmt = $connect->prepare("SELECT * FROM sitios where estado='1'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $idsit; ?>"><?php echo $nomsi; ?> </option>
                    <?php
                }
        ?>
            ?>
   	</select>
</div>
  </div>


  	            <div class="col-md-6 col-lg-12">
      <div class="form-group">
    <label for="email">Precio adicional del envio</label>
<input type="text"   class="form-control" id="precio" name="precio">
</div>
  </div>





<button class="btn btn-common disabled" name="order_client" type="submit"  style="pointer-events: all; cursor: pointer; margin-left: 15px;"> Realizar pedido</button>

	</div>



</form>

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
    include_once '../../backend/php/st_addcheck_client.php'
?>
        <script>
        // Script para manejar la selección del sitio y mostrar el precio
        document.getElementById('sitio').addEventListener('change', function () {
            // Obtener el valor seleccionado
            var selectedValue = this.value;

            // Hacer una solicitud AJAX para obtener el precio del sitio seleccionado
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'getPrecio.php?id=' + selectedValue, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Actualizar el valor del input de precio
                    document.getElementById('precio').value = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
        <script>
        function mostrarDiv() {
            var select = document.getElementById("txttppg");
            var divOculto = document.getElementById("divOculto");
            var divOculto1 = document.getElementById("divOculto1");

            // Mostrar el div si la opción seleccionada es diferente a la primera opción (opción por defecto)
            if (select.value !== "") {
                divOculto.style.display = "block";
                divOculto1.style.display = "block";
            } else {
                divOculto.style.display = "none";
                divOculto1.style.display = "none";
            }
        }
    </script>
    <script src="../../backend/js/blah.js"></script>
</body>
</html>
	
<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>
