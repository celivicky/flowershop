<!-- EDIT -->
<div class="modal fade" id="editsi_<?php echo  $g->idsit; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar sitios</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Nombre del sitio</label><span class="badge badge-danger">*</span>
            <input type="text"  required value="<?php echo  $g->nomsi; ?>" class="form-control" id="" name="txtnoms" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->idsit; ?>" name="txtidsit">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Precio del sitio</label><span class="badge badge-danger">*</span>
            <input type="text" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  value="<?php echo  $g->precsiti; ?>" class="form-control" id="" name="txtprecs" placeholder="ejmp: Descripcion">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


                <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="email2">Descripcion del siio</label><span class="badge badge-danger">*</span>
            <input type="text" value="<?php echo  $g->detsi; ?>" required   class="form-control" id="" name="txtdescsi">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdsitt'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>
<!--------------------- psd ------------------------->
<!--------------------- close ------------------------->




<!--------------------- DONE ------------------------->





<!-- ---------------------------------------------perfil --------------------->
<!--------------------------------------------------- info---------------------------------- -->
<!------------------------------------------------ actualizar paword ------------------------------------------->
<!------------------------------------------------ actualizar foto ------------------------------------------->
