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
            	<li  class="active">
                    <a href="../administrador/escritorio.php" class="dashboard"><i class="material-icons">dashboard</i><span>Panel</span></a>
                </li>
                <li class="dropdown">
                	<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">history_edu</i><span>Historial</span></a>
                         <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                         	<li>
                            	<a href="../historial/cliente.php">Clientes</a>
                        	</li>
                        	<li>
                            	<a href="../historial/categoria.php">Categorias</a>
                        	</li>
                        	<li>
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
			  	<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                       <span class="material-icons">group</span>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                    <p class="category"><strong>Clientes</strong></p>
                                   <?php 
                                  require '../../backend/bd/ctconex.php'; 
        $sql = "SELECT COUNT(*) total FROM clientes";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
                                    <h3 class="card-title"><?php echo  $total; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Recién actualizado
                                    </div>
                                </div>
                            </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">apps</span>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                    <p class="category"><strong>Categorias</strong></p>
                                    <?php 
        $sql = "SELECT COUNT(*) total FROM categoria";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
                                    <h3 class="card-title"><?php echo  $total; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Recién actualizado
                                    </div>
                                </div>
                            </div>
                </div>


                 <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">grid_view</span>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                    <p class="category"><strong>Productos</strong></p>
                                    <?php 
        $sql = "SELECT COUNT(*) total FROM productos";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
                                    <h3 class="card-title"><?php echo  $total; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Recién actualizado
                                    </div>
                                </div>
                            </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                       <span class="material-icons">paid</span>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                    <p class="category"><strong>Ventas</strong></p>

                                 <?php 
        $sql = "SELECT SUM(total_price) total_price,placed_on FROM orders";
        $result = $connect->query($sql); //$pdo sería el objeto conexión
        $total = $result->fetchColumn();

         ?>
                                    <h3 class="card-title"><?php echo  $total; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Recién actualizado
                                    </div>
                                </div>
                            </div>
                </div>
			 </div>

			 <div class="row">
			 	
			 	<div class="col-lg-7 col-md-12">
			 		<div class="card" style="min-height: 485px">
			 			<div class="card-header card-header-text">
                                    <h4 class="card-title">Clientes añadidos recientemente</h4>
                                    <p class="category">Nuevos clientes añadidos el dia de hoy</p>
                         </div>

                         	<div class="card-content table-responsive">
                               <?php
                            
 $sentencia = $connect->prepare("SELECT * FROM clientes order BY  idclie DESC;");
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
                                            <th>Clientes</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                        </tr></thead>
                                        <tbody>
                                             <?php foreach($data as $g):?>
                                            <tr>
                                                
                                                <td><?php echo  $g->nomclie; ?>  <?php echo  $g->apeclie; ?></td>
                                                <td><?php echo  $g->telclie; ?></td>
                                                <td><?php echo  $g->correo; ?></td>
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

			 	<div class="col-lg-5 col-md-12">
			 		<div class="card" style="min-height: 485px">
			 			<div class="card-header card-header-text">
                                    <h4 class="card-title">Actividad reciente</h4>
                         </div>

<div class="card-content">
  <div class="streamline">
                                        <?php
                               
 $sentencia = $connect->prepare("SELECT orders.method,orders.idord, orders.user_id, clientes.idclie, clientes.nomclie, clientes.apeclie,clientes.telclie, clientes.correo, orders.total_products, orders.total_price, orders.placed_on, orders.payment_status, orders.tipc, orders.ourentre, orders.tiemp, orders.distri, orders.direcenvio, orders.refer, orders.deen, orders.paren, orders.mendedi, orders.foto FROM orders INNER JOIN clientes ON orders.user_cli = clientes.idclie GROUP BY orders.idord order BY orders.idord DESC limit 20;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
    <?php foreach($data as $c):?>
                                        <div class="sl-item sl-primary">
                                            <div class="sl-content">
                                                <small class="text-muted"><?php echo  $c->placed_on; ?></small>
                                              
                                                <small class="text-muted">s/.<?php echo  $c->total_price; ?></small>
                                                <p><?php echo  $c->nomclie; ?> <?php echo  $c->apeclie; ?></p>
                                            </div>
                                        </div>

                                        <?php endforeach; ?>
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


       <div class="row">
         
         <div class="col-lg-12 col-md-12">
           <div class="card" style="min-height: 485px">
             <div class="card-header card-header-text">
                  <h4 class="card-title">Sliders</h4>
                  <a data-toggle="modal" href="#newslid" class="btn btn-danger text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>add</i>Nuevo slider</a>
              </div>
  <div class="card-content table-responsive">
    <?php
   
 $sentencia = $connect->prepare("SELECT * FROM slider ORDER BY idsli DESC ;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
    <table class="table table-hover" id="example1">
       <thead class="text-primary">
         <tr>
             <th>Opciones</th>
             <th>Foto</th>
             <th>Nombre</th>
             <th>Descripcion</th>
             <th>Estado</th>
             
         </tr>  
       </thead>
       <tbody>
           <?php foreach($data as $g):?>
            <tr>
                <td>
                     
                <?php    if($g->estado =='1')  { ?>
               
                <a class="btn btn-warning text-white" data-toggle="modal" href="#edit_<?php echo  $g->idsli; ?>"><i class='material-icons' data-toggle='tooltip' title='edit_note'>edit_note</i></a>


                        <?php  }   else {?> 
                <a class="btn btn-success text-white" data-toggle="modal" href="#done_<?php echo  $g->idsli; ?>"><i class='material-icons' data-toggle='tooltip' title='done'>done</i></a>
                            <?php  } ?>   
                </td>
                <td><img width="100" src="../../backend/images/subidas/<?php echo  $g->foto; ?>"></td>
                <td><?php echo  $g->nomsl; ?></td>
                <td><?php echo  $g->detas; ?></td>
                
                
                <td><?php    if($g->estado =='1')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Desactivado</span>
     <?php  } ?> </td>
            </tr>
            <?php include '../../backend/modal/mdaeditslid.php';  ?>
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
                  <h4 class="card-title">Sitios</h4>
                  <a data-toggle="modal" href="#newsit" class="btn btn-danger text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>add</i>Nuevo sitio</a>
              </div>
  <div class="card-content table-responsive">
    <?php
   
 $sentencia = $connect->prepare("SELECT * FROM sitios ORDER BY idsit DESC ;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
    <table class="table table-hover" id="example2">
       <thead class="text-primary">
         <tr>
             <th>Opciones</th>
             
             <th>Nombre</th>
             <th>Precio</th>
             <th>Estado</th>
             
         </tr>  
       </thead>
       <tbody>
           <?php foreach($data as $g):?>
            <tr>
                <td>
                     
                <?php    if($g->estado =='1')  { ?>
               
                <a class="btn btn-warning text-white" data-toggle="modal" href="#editsi_<?php echo  $g->idsit; ?>"><i class='material-icons' data-toggle='tooltip' title='edit_note'>edit_note</i></a>


                        <?php  }   else {?> 
                <a class="btn btn-success text-white" data-toggle="modal" href="#done_<?php echo  $g->idsit; ?>"><i class='material-icons' data-toggle='tooltip' title='done'>done</i></a>
                            <?php  } ?>   
                </td>
               
                <td><?php echo  $g->nomsi; ?></td>
                <td><?php echo  $g->precsiti; ?></td>
                
                
                <td><?php    if($g->estado =='1')  { ?> 

    <span class="badge badge-success">Activo</span>
               <?php  }   else {?> 
    <span class="badge badge-danger">Desactivado</span>
     <?php  } ?> </td>
            </tr>
           <?php include '../../backend/modal/mdaeditsit.php';  ?>
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
  <?php include('../../backend/modal/modanewslid.php'); ?>
  <?php include('../../backend/modal/modanewsit.php'); ?>
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
    <script src="../../backend/js/example.js"></script>
    <script src="../../backend/js/example1.js"></script>
    <script src="../../backend/js/example2.js"></script>
   <script type="text/javascript" src="../../backend/js/sweetalert.js"></script>
<?php
    include_once '../../backend/php/st_adddslid.php'
?>
<?php
    include_once '../../backend/php/st_updslid.php'
?>
<?php
    include_once '../../backend/php/st_adddsitt.php'
?>
<?php
    include_once '../../backend/php/st_updsitt.php'
?>
</body>
</html>


<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>  	