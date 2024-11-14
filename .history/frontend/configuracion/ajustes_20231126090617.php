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
                <li class="dropdown">
                	<a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">history_edu</i><span>Historial</span></a>
                         <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                         	<li class="">
                            	<a href="../historial/cliente.php">Clientes</a>
                        	</li>
                        	<li class="">
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
                        <li class="">
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
                        <li class="">
                            <a href="../accesos/usuarios.php">Usuarios</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <i class="material-icons">settings</i><span>Configuracion</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li class="">
                            <a href="../configuracion/perfil.php">Mi perfil</a>
                        </li>
                        <li class="active">
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
                            <h4 class="card-title">Ajustes</h4>
                            <p class="category">Mi ajustes</p>
                           
                            
                         </div>

                         	<div class="card-content table-responsive">
                                <?php
    require '../../backend/bd/ctconex.php'; 
    $id = $_SESSION['id'];
 $sentencia = $connect->prepare("SELECT * FROM configuracion;");
 $sentencia->execute();

$data =  array();
if($sentencia){
  while($r = $sentencia->fetchObject()){
    $data[] = $r;
  }
}
   ?>
   <?php if(count($data)>0):?>
        <?php foreach($data as $f):?>
  <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
     <div class="row">
    <div class="col-md-4 col-lg-12">
        <div class="form-group">
            <label for="email2">Nombre</label>
            <input type="text" required="" value="<?php echo  $f->nomemp  ; ?>"  class="form-control" id="" name="txtname" placeholder="ejmp: joe doe">
            <input type="hidden" value="<?php echo  $f->idconfi; ?>" name="txtidconfi">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">RUC</label>
            <input type="text" maxlength="14" required="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo  $f->rucem  ; ?>"  class="form-control" id="" name="txtrucc" placeholder="ejmp: joe doe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

        <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Direccion</label>
            <input type="text" required="" value="<?php echo  $f->direcc  ; ?>"  class="form-control" id="" name="txtdirec" placeholder="ejmp: joe doe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Telefono</label>
            <input type="text" required="" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" value="<?php echo  $f->teleem  ; ?>"  class="form-control" id="" name="txttel" placeholder="ejmp: joe doe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>



                              </div>

 <div class="form-group">
        <div class="col-sm-12">
            <button name='stupdcong' class="btn btn-success text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Actualizar</button>                       
            <a class="btn btn-danger text-white" href="../configuracion/ajustes.php"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</a>
        </div>
    </div>

  </form>

  <?php endforeach; ?>
    <?php else:?>
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
    include_once '../../backend/php/st_updsett.php'
?>

</body>
</html>


<?php }else{ 
    header('Location: ../erro404.php');
 } ?>
 <?php ob_end_flush(); ?>  	