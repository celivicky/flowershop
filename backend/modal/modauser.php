<!-- NUEVO -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                 <label class="control-label" style="text-align: center;"><strong><center>Iniciar Sesión</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
               
            </div>

            
            <div class="modal-body">
                <div class="container-fluid">
<?php 
                            if (isset($errMsg)) {
                                echo '
    <div style="color:#FF0000;text-align:center;font-size:20px; font-weight:bold;">'.$errMsg.'</div>
    ';  ;
                            }

                        ?>
                    <form autocomplete="off" method="post"  role="form">
                        <div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Correo electrónico</label>
            <input type="email" required  class="form-control" value="<?php if(isset($_POST['correo'])) echo $_POST['correo'] ?>" id="correo" name="correo" placeholder="ejmp: perfil01@gmail.com">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

        <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Contraseña</label>
            <input type="password" required  class="form-control"  value="<?php if(isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" id="clave" name="clave" placeholder="ejmp: ********">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


                        </div>

                        <div class="modal-footer">
                <button  name='ctxlog' type="submit" class="btn btn-danger" >INGRESAR</button>
                
                 <button type="button" class="btn btn-dark" data-dismiss="modal" >No, cancelar</button>

                 
            </div>
                    </form>
                    <p>¿No tiene una cuenta?
                            <a href="registro.php" style="color:red">Cree una aqui</a>
                    </p>
                
            
   
                </div>
            


        </div>

            

        </div>
    </div>
</div> 


