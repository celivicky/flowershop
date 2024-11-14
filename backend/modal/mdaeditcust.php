<!-- EDIT -->
<div class="modal fade" id="edit_<?php echo  $g->idclie; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar cliente</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-12 col-lg-4">
        <div class="form-group">
            <label for="email2">Nombre del cliente</label><span class="badge badge-danger">*</span>
            <input type="text"  required value="<?php echo  $g->nomclie; ?>" class="form-control" id="" name="txtnomcli" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->idclie; ?>" name="txtidclie">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

     <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Apellido del cliente</label><span class="badge badge-danger">*</span>
            <input type="text" required value="<?php echo  $g->apeclie; ?>" class="form-control" id="" name="txtapcl" placeholder="ejmp: doe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Telefono del cliente</label><span class="badge badge-danger">*</span>
            <input type="text" value="<?php echo  $g->telclie; ?>" maxlength="9" required  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txttelcl" placeholder="ejmp: 999898989">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Genero del cliente</label><span class="badge badge-danger">*</span>
            <select class="form-control" name="txtsexcl" required>
                <option value="<?php echo  $g->sexclie; ?>"><?php echo  $g->sexclie; ?></option>
                <option>-------Seleccione-------</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                
            </select>
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Correo del cliente</label><span class="badge badge-danger">*</span>
            <input type="email"  required value=" <?php echo  $g->correo; ?>" class="form-control" id="" name="txtcorcl" placeholder="ejmp: admin09@gmail.com">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdcust'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>
<!--------------------- psd ------------------------->
<!--------------------- close ------------------------->


<div class="modal fade" id="close_<?php echo  $g->idclie; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="col-sm-12" style="text-align: center;">
                    <img src="../../backend/images/advertencia.png">
                    <br><br>
                     <label  class="control-label"><strong><center>Desactivar?</center></strong></label>
                       <p>Esá seguro de desactivar?</p>        
                </div>
        <form enctype="multipart/form-data" method="POST"  autocomplete="off">
                   <input type="hidden" value="<?php echo  $g->idclie; ?>" name="txtidclie">     
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">No, cancelar</button>
                 <button class="btn btn-dark" name='stupddesac'>Si, desactivar</button>
            </div>
        </form>
    </div>
        </div> 
        </div>
    </div>
</div>


<!--------------------- DONE ------------------------->


<div class="modal fade" id="done_<?php echo  $g->idclie; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="col-sm-12" style="text-align: center;">
                    <img src="../../backend/images/advertencia.png">
                    <br><br>
                     <label  class="control-label"><strong><center>Activar?</center></strong></label>
                       <p>Esá seguro de activar?</p>        
                </div>
        <form enctype="multipart/form-data" method="POST"  autocomplete="off">
                   <input type="hidden" value="<?php echo  $g->idclie; ?>" name="txtidclie">     
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">No, cancelar</button>
                 <button class="btn btn-dark" name='stupdact'>Si, activar</button>
            </div>
        </form>
    </div>
        </div> 
        </div>
    </div>
</div>


<!-- ---------------------------------------------perfil --------------------->
<!--------------------------------------------------- info---------------------------------- -->
<!------------------------------------------------ actualizar paword ------------------------------------------->
<!------------------------------------------------ actualizar password ------------------------------------------->
<div class="modal fade" id="key_<?php echo  $g->idclie; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar contraseña</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                


     <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="email2">Nueva contraseña</label><span class="badge badge-danger">*</span>
            <input type="password" required  class="form-control" id="" name="txtnwcl" placeholder="ejmp: ********">
            <input type="hidden" value="<?php echo  $g->idclie; ?>" name="txtidclie">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>




              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdpsdcust'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>