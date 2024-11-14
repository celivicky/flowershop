<!-- EDIT -->
<div class="modal fade" id="edit_<?php echo  $g->idsli; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar slider</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Nombre del slider</label><span class="badge badge-danger">*</span>
            <input type="text"  required value="<?php echo  $g->nomsl; ?>" class="form-control" id="" name="txtnomsl" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->idsli; ?>" name="txtidsli">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Descripcion del slider</label><span class="badge badge-danger">*</span>
            <input type="text" required  value="<?php echo  $g->detas; ?>" class="form-control" id="" name="txtdes" placeholder="ejmp: Descripcion">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

            <div class="col-md-6 col-lg-12">
        <div class="form-group">
            <label for="email2">Actualizar imagen</label><span class="badge badge-danger">*</span>
            <input type="file" accept=".png" required id="imagen" name="foto" onchange="readURL(this);" data-toggle="tooltip">
            <br>
    <center><img id="blah" src="../../backend/images/subidas/<?php echo $g->foto; ?>" width="100" heigth="100" alt="your image" style="max-width:90px;" /></center>
  
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-email" class="badge badge-danger"></span>
            <span class="badge badge-danger">1920 * 1080</span>
        </div>
    </div>

              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdslid'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
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
