<?php
ob_start();
     session_start();
         if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 1){
    header('location: ../erro404.php');
  }
?>
<?php if(isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Doña Beatriz Online</title>
    <link rel="icon" type="image/png" href="../../backend/images/favicon.png"/>
    <link rel="stylesheet" href="../../backend/css/bootstrap.min.css">
         <!----css3---->
    <link rel="stylesheet" href="../../backend/css/admin.css">
          <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
     
    <link rel="stylesheet" type="text/css" href="../../backend/css/material.css">
        <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="../../backend/css/datatable.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/buttonsdataTables.css">
    <link rel="stylesheet" type="text/css" href="../../backend/css/font.css">
</head>
<body>
	<div class="wrapper">
		<div class="body-overlay"></div>
		<nav id="sidebar">
			<div class="sidebar-header">
                <h3><img src="../../backend/images/favicon.png" class="img-fluid"/><span>Floreria</span></h3>
            </div>
            <ul class="list-unstyled components">
            	<li  class="">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Panel</span></a>
                </li>
                <li class="dropdown active">
                	<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">history_edu</i><span>Historial</span></a>
                         <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                         	<li>
                            	<a href="../historial/cliente.php">Clientes</a>
                        	</li>
                        	<li class="">
                            	<a href="../historial/categoria.php">Categorias</a>
                        	</li>
                        	<li>
                            	<a href="../historial/producto.php">Productos</a>
                        	</li>
                        	<li class="active">
                            	<a href="../historial/delivery.php">Delivery</a>
                        	</li>
                        	

                         </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">topic</i><span>Reportes</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="../reportes/cliente.php">Clientes</a>
                        </li>
                        <li>
                            <a href="../reportes/delivery.php">Delivery</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">privacy_tip</i><span>Acceso</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="../accesos/usuarios.php">Usuarios</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">settings</i><span>Configuracion</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="../configuracion/perfil.php">Mi perfil</a>
                        </li>
                        <li>
                            <a href="../configuracion/ajustes.php">Ajustes</a>
                        </li>
                       
                    </ul>
                </li>

            </ul>
		</nav>

		<div id="content">
			<div class="top-navbar">
				<nav class="navbar navbar-expand-lg">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        	<span class="material-icons">arrow_back_ios</span>
                    	</button>
                    	 <a class="navbar-brand" href="#"> Panel administrativo </a>
                    	 <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>
                    	<div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                    		<ul class="nav navbar-nav ml-auto">
                    			<li class="dropdown nav-item active">
                    				<a href="#" class="nav-link" data-toggle="dropdown">
                                   		<span class="material-icons">person</span>   
                               		</a>
                               		<ul class="dropdown-menu">
                               			<li>
                                        	<a data-toggle="modal" href="#new" style="color: #db001d;">Cerrar sesion</a>
                                    	</li>
                               		</ul>
                    			</li>
                    		</ul>
                    	</div>
					</div>
				</nav>

			</div>

			<div class="main-content">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../administrador/escritorio.php">Panel administrativo</a></li>
    <li class="breadcrumb-item"><a href="../historial/delivery.php">Delivery </a></li>
    <li class="breadcrumb-item active" aria-current="page">Nuevo delivery</li>
  </ol>
</nav>

			 <div class="row">
			 	
			 	<div class="col-lg-6 col-md-6">
			 		<div class="card" style="min-height: 485px">
			 			<div class="card-header card-header-text">
                            <h4 class="card-title">Delivery añadidos recientemente</h4>
                            <p class="category">Nuevos delivery añadidas el dia de hoy</p>
                           
                         </div>

                         <div class="card-content table-responsive">
                             <table class="table table-hover" id="example1">
                                <thead class="text-primary"> 
                                  <tr>
                                      <th>Productos</th>
                                      <th>Precio</th>
                                      <th>Stock</th>
                                      <th>Cantidad</th>
                                      <th>Subtotal</th>
                                      <th></th>
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

    <td><?= $fetch_cart['nompro']; ?></td>
    <td><?= $fetch_cart['prec1']; ?></td>
    <td><?= $fetch_cart['stock']; ?></td>
    <td>
        <form action="" method="POST">
              <div class="form-group">
                 <input type="hidden" name="prdt" value="<?= $fetch_cart['idv']; ?>">
                   <input type="number" name="p_qty" value="<?= $fetch_cart['quantity']; ?>" style="width:100px;" min="1" max="99" class="form-control" placeholder="Cantidad">
                 </div>
            <button type="submit" name="update_qty" class="btn btn-danger"> <i class='material-icons' data-toggle='tooltip' title='crear'>refresh</i></button>
        </form>        
    </td>
    <td><span><?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></span></td>
    <td>

        <form action="" method="POST">
          <input type="hidden" name="prdt" value="<?= $fetch_cart['idv']; ?>">
          <button type="submit" name="delete_qty" class="btn btn-danger"> <i class='material-icons' data-toggle='tooltip' title='close'>close</i></button>  
        </form>
  
    </td>



    </tbody>
  <?php
      $grand_total += $sub_total;
      }
   }else{
      echo '<p class="alert alert-warning">Tu carrito esta vació</p>';
   }
   ?>
                             </table>
                         </div>
                         	
			 		</div>
			 	</div>



                <div class="col-lg-6 col-md-6">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Productos</h4>
                            <p class="category">Agregar nuevos productos</p>
                           
                         </div>

                         <div class="card-content table-responsive">
                           <?php 

$sentencia = $connect->prepare("SELECT productos.idpro, productos.foto,productos.codpro, productos.nompro,productos.detpro, productos.stock, categoria.idcat, categoria.nomcat, productos.prec1, productos.prec2, productos.estado FROM productos INNER JOIN categoria on productos.idcat = categoria.idcat order BY productos.idpro DESC;");
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
                  <th>Nombre</th>
                  <th>Precio</th>
                  
                  <th>Foto</th>
                  <th>Stock</th>
                  <th>Opcion</th>
              </tr> 
           </thead>
           <tbody>
            <?php foreach($data as $d):?>
               <tr>
                   <td><?php echo  $d->nompro; ?></td>
                   <td><?php echo  $d->prec1; ?></td>
        <td><img src="../../backend/images/subidas/<?php echo $d->foto ?>" width='50' height='50'></td>
                                               <?php 

if ($d->stock <= 0) {
  
    echo '<td><span class="badge badge-danger">stock vacio</span></td>';
}elseif ($d->stock <= 5) {
    echo '<td><span class="badge badge-warning">Está por acabarse</span></td>';
   
}else {
    echo '<td><span class="badge badge-success">' . $d->stock . '</span></td>';
}
                                                 ?>
                                                 <td>
   
    <form class="form-inline" method="post" action="">
    <input type="hidden" name="prdt" value="<?php echo $d->idpro; ?>">
    <input type="hidden" name="pdrus" value="<?php echo $_SESSION['id']; ?>">
    <input type="hidden" name="name" value="<?php echo $d->nompro; ?>">
    <input type="hidden" name="prec" value="<?php echo $d->prec1; ?>">
   
      <div class="form-group">
        <input type="number" name="p_qty" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
      </div>
      <button type="submit" name="add_to_cart" class="btn btn-success"> <i class='material-icons' data-toggle='tooltip' title='crear'>shopping_cart</i></button>
    </form> 

                                                 </td>
                                           </tr>
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



    <div class="col-lg-12 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Delivery</h4>
                <p class="category">Finalizar delivery</p>
               
             </div>

 <div class="card-content table-responsive">
<div class="alert alert-warning">
  <strong>Estimado usuario!</strong> Los campos remarcados con <span class="text-danger">*</span> son necesarios.
</div>  
    <form enctype="multipart/form-data" method="POST"  autocomplete="off">
        <div class="row">
<div class="col-md-4 col-lg-4">
   <div class="form-group">
        <label for="email">Clientes<span class="text-danger">*</span></label>
        <input type="hidden" name="pdrus" value="<?php echo $_SESSION['id']; ?>">
        <input type="hidden" value="<?php $d->stock ?>" name="st">
        <input type="hidden" value="<?php $d->idpro ?>" name="stpro">
        <input type="hidden" name="quantity" value="<?php $fetch_cart['quantity'] ?> ">
        <select class="form-control" required name="cxtip">
            <option value="">----------Seleccione------------</option>  
                <?php
               //require '../../backend/bd/ctconex.php';
                $stmt = $connect->prepare("SELECT * FROM clientes where estado='1' order by idclie desc");
                $stmt->execute();
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        extract($row);
                        ?>
                <option value="<?php echo $idclie; ?>"><?php echo $nomclie; ?> <?php echo $apeclie; ?></option>
                        <?php
                    }
                    ?>
                ?>                          
        </select>
    </div>   
</div>

  <div class="col-md-4 col-lg-4">
   <div class="form-group">
    <label for="email">Comprobante<span class="text-danger">*</span></label>
    <select class="form-control" required name="cxcom">
          <option value="">----------Seleccione------------</option>  
            <option value="Ticket">Ticket</option>                         
    </select>
</div>   
  </div>

    <div class="col-md-4 col-lg-4">
   <div class="form-group">
    <label for="email">Tipo de pago<span class="text-danger">*</span></label>
    <select class="form-control" required name="cxtcre">
          
            <option value="Yape">Yape</option> 
                       
    </select>
</div>   
  </div>

        <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Fecha<span class="text-danger">*</span></label>
    <input type="date"  id="fechaActual" class="form-control"   name="txtdate" required >
   
</div>
  </div>


<div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Fecha de entrega<span class="text-danger">*</span></label>
    <input type="date"   class="form-control"   name="txtfeent" required >
   
</div>
  </div>


    <div class="col-md-4 col-lg-4">
   <div class="form-group">
    <label for="email">Horario de entrega<span class="text-danger">*</span></label>
    <select class="form-control" required name="txtourent">
          <option value="">----------Seleccione------------</option>  
            <option value="Mañana: 9am - 2pm">Mañana: 9am - 2pm</option>
            <option value="Tarde: 3pm - 7pm">Tarde: 3pm - 7pm</option>                         
    </select>
</div>   
  </div>


      <div class="col-md-4 col-lg-4">
   <div class="form-group">
    <label for="email">Distrito<span class="text-danger">*</span></label>
    <select class="form-control" required name="txtdistrr">
          <option value="">----------Seleccione------------</option>  
            <option value="Piura">El valle</option>     
            <option value="Castilla">Av victoria</option>     
            <option value="Catacaos">UCV</option>     
            <option value="Cura mori">Altamira</option>
            <option value="El tallan">Sabana grande</option>
            <option value="La arena">La hoyada</option>
            <option value="Las lomas">Miranda</option>  
            <option value="Tambogrande">Chacao</option> 
            <option value="Veintiseis de octubre">Capitolio</option>                         
    </select>
</div>   
  </div>

  <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Direccion<span class="text-danger">*</span></label>
    <input type="text"   class="form-control"   name="txtdirecc" required >
   
</div>
  </div>


    <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Referencia<span class="text-danger">*</span></label>
    <input type="text"   class="form-control"   name="txtreff" required >
   
</div>
  </div>


      <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">De<span class="text-danger">*</span></label>
    <input type="text"   class="form-control"   name="txtdee" required >
   
</div>
  </div>



        <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Para<span class="text-danger">*</span></label>
    <input type="text"   class="form-control"   name="txtparaa" required >
   
</div>
  </div>


          <div class="col-md-4 col-lg-4">
      <div class="form-group">
    <label for="email">Mensaje (dedicatoria)<span class="text-danger">*</span></label>
    <input type="text"   class="form-control"   name="txtdedi" required >
   
</div>
  </div>



        </div>

        <div class="row">
                    <?php
    //require_once('../../backend/config/Conexion.php');
     $user_id = $_SESSION['id'];
      $cart_grand_total = 0;
      $select_cart_items = $connect->prepare("SELECT cart.idv, cart.user_id,productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro WHERE user_id = ?");
      $select_cart_items->execute([$user_id]);
      if($select_cart_items->rowCount() > 0){
         while($fetch_cart_items = $select_cart_items->fetch(PDO::FETCH_ASSOC)){
            $cart_total_price = ($fetch_cart_items['prec1'] * $fetch_cart_items['quantity']);
            $cart_grand_total += $cart_total_price;
   ?>
       <div class="col-md-12 col-lg-12">
   <div class="form-group">
    
    
   <input type="hidden" value="<?= $fetch_cart_items['idpro']; ?>" name="product1[]">
   <input type="hidden" value="<?= $fetch_cart_items['quantity']; ?>" name="canti[]">
   <input type="hidden" value="<?= $fetch_cart_items['idv']; ?>" name="idcart">

   
</div>   
  </div>
  <?php
    }
   }else{
      echo '<p class="empty"><p class="alert alert-warning">Tu carrito esta vació</p></p>';

   }
   ?>
        </div>


            <div class="row">
        <div class="col-md-12 col-lg-12">
        
            <h1 style="font-size:42px; color:#000000;"><strong>Precio Total :$/<?php echo number_format($cart_grand_total, 2); ?> </strong></h1>
                                                </div>
        </div>

<div class="form-group">
        <div class="col-sm-12">
            <button name="order" type="submit" class="btn btn-success text-white <?= ($cart_grand_total > 1)?'':'disabled'; ?>"><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>                       
            <a class="btn btn-danger text-white" href="../historial/nuevo_delivery.php"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</a>
        </div>
    </div>

    </form> 
 </div>

                
        </div>
    </div>


			 </div>

			</div>
		</div>

	</div>

	<?php include('../../backend/modal/modacerrar.php'); ?>
    <?php include('../../backend/modal/modanewcate.php'); ?>
   <script src="../../backend/js/jquery-3.3.1.slim.min.js"></script>
   <script src="../../backend/js/popper.min.js"></script>
   <script src="../../backend/js/bootstrap.min.js"></script>
   <script src="../../backend/js/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="../../backend/js/sidebarCollapse.js"></script>
                   <!-- Data Tables -->
    <script type="text/javascript" src="../../backend/js/datatable.js"></script>
    <script type="text/javascript" src="../../backend/js/datatablebuttons.js"></script>
    <script type="text/javascript" src="../../backend/js/jszip.js"></script>
    <script type="text/javascript" src="../../backend/js/pdfmake.js"></script>
    <script type="text/javascript" src="../../backend/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonshtml5.js"></script>
    <script type="text/javascript" src="../../backend/js/buttonsprint.js"></script>	
   <script type="text/javascript" src="../../backend/js/example.js"></script>
   <script type="text/javascript" src="../../backend/js/fereee.js"></script>
   <script type="text/javascript" src="../../backend/js/sweetalert.js"></script>
   <?php
    include_once '../../backend/php/st_addcart.php'
?>
<?php
    include_once '../../backend/php/st_updcart.php'
?>
<?php
    include_once '../../backend/php/st_deletcart.php'
?>
<?php
    include_once '../../backend/php/st_addcheck.php'
?>

</body>
</html>


<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>  	