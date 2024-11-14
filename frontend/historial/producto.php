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
                        	<li class="active">
                            	<a href="../historial/producto.php">Productos</a>
                        	</li>
                        	<li>
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
			 <div class="row">
			 	
			 	<div class="col-lg-12 col-md-12">
			 		<div class="card" style="min-height: 485px">
			 			<div class="card-header card-header-text">
                            <h4 class="card-title">Productos añadidos recientemente</h4>
                            <p class="category">Nuevos productos añadidas el dia de hoy</p>
                            <a data-toggle="modal" href="#newprod" class="btn btn-danger text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>add</i>Nuevo producto</a>
                            <a href="../pdf/pdf_product.php" class="btn btn-danger text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>picture_as_pdf</i>Reporte producto</a>
                         </div>

                         	<div class="card-content table-responsive">
                             <?php
                require '../../backend/bd/ctconex.php'; 
 $sentencia = $connect->prepare("SELECT productos.idpro, productos.foto,productos.codpro, productos.nompro,productos.detpro, productos.stock, categoria.idcat, categoria.nomcat, productos.prec1, productos.prec2, productos.estado FROM productos INNER JOIN categoria on productos.idcat = categoria.idcat ORDER BY productos.idpro DESC ;");
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
             <th>Nombre</th>
             <th>Precio</th>
             <th>Categoria</th>
             <th>Stock</th>
             <th>Estado</th>
             
         </tr>  
       </thead>
       <tbody>
           <?php foreach($data as $g):?>
            <tr>
                <td>
                     
                <?php    if($g->estado =='1')  { ?>
                <a class="btn btn-danger text-white" data-toggle="modal" href="#close_<?php echo  $g->idpro; ?>"><i class='material-icons' data-toggle='tooltip' title='cancel'>cancel</i></a>
                <a class="btn btn-warning text-white" data-toggle="modal" href="#edit_<?php echo  $g->idpro; ?>"><i class='material-icons' data-toggle='tooltip' title='edit_note'>edit_note</i></a>
                <a class="btn btn-dark text-white" data-toggle="modal" href="#foto_<?php echo  $g->idpro; ?>"><i class='material-icons' data-toggle='tooltip' title='center_focus_weak'>center_focus_weak</i></a>


                        <?php  }   else {?> 
                <a class="btn btn-success text-white" data-toggle="modal" href="#done_<?php echo  $g->idpro; ?>"><i class='material-icons' data-toggle='tooltip' title='done'>done</i></a>
                            <?php  } ?>   
                </td>
                <td> <?php echo  $g->nompro; ?></td>
                <td><?php echo  $g->prec1; ?></td>
                <td><?php echo  $g->nomcat; ?></td>
                
                   
                        

<?php 

if ($g->stock <= 0) {
  
    echo '<td><span class="badge badge-danger">stock vacio</span></td>';
}elseif ($g->stock <= 5) {
    echo '<td><span class="badge badge-warning">Está por acabarse</span></td>';
   
}else {
    echo '<td><span class="badge badge-success">' . $g->stock . '</span></td>';
}
                                                 ?>
               
                
                
                <td><?php    if($g->estado =='1')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Desactivado</span>
     <?php  } ?> </td>
            </tr>
            <?php include '../../backend/modal/mdaeditprod.php';  ?>
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

			</div>
		</div>

	</div>

	<?php include('../../backend/modal/modacerrar.php'); ?>
    <?php include('../../backend/modal/modanewprodc.php'); ?>
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
   <script type="text/javascript" src="../../backend/js/sweetalert.js"></script>
<?php
    include_once '../../backend/php/st_adddprodc.php'
?>
<?php
    include_once '../../backend/php/st_updprodc.php'
?>
<?php
    include_once '../../backend/php/st_upddesprodc.php'
?>
<?php
    include_once '../../backend/php/st_updactprodc.php'
?>
<?php
    include_once '../../backend/php/st_updftprodc.php'
?>
</body>
</html>


<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>  	