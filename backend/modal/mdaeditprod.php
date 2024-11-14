<!-- EDIT -->
<div class="modal fade" id="edit_<?php echo  $g->idpro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar producto</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Codigo del producto</label>
            <input type="text"  readonly="" value="<?php echo  $g->codpro; ?>" class="form-control" id="" name="txtnomcodpro" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->idpro; ?>" name="txtidpro">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

        <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Nombre del producto</label><span class="badge badge-danger">*</span>
            <input type="text" required value="<?php echo  $g->nompro; ?>"  class="form-control" id="" name="txtnomprd" placeholder="ejmp: producto01">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 


    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Precio 1 del producto</label><span class="badge badge-danger">*</span>
            <input type="text" required value="<?php echo  $g->prec1; ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtpr1" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


            <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Precio 2 del producto</label>
            <input type="text" value="<?php echo  $g->prec2; ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtpr2" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Stock del producto</label><span class="badge badge-danger">*</span>
            <input type="text" value="<?php echo  $g->stock; ?>" maxlength="3" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtsotc" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


            <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Categoria del producto</label><span class="badge badge-danger">*</span>
            <select class="form-control" name="txtidcat" required>
               <option value="<?php echo  $g->idcat; ?>"><?php echo  $g->nomcat; ?></option>
                <option>-------Seleccione-------</option>

                <?php
           require '../../backend/bd/ctconex.php';
            $stmt = $connect->prepare("SELECT * FROM categoria where estado='1'");
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                    extract($row);
                    ?>
            <option value="<?php echo $idcat; ?>"><?php echo $nomcat; ?> </option>
                    <?php
                }
        ?>
            ?>
                
            </select>
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-6 col-lg-12">
        <div class="form-group">
            <label for="email2">Descripción del producto</label><span class="badge badge-danger">*</span>
            <input type="text" value="<?php echo  $g->detpro; ?>" required  class="form-control" id="" name="txtdesc" placeholder="ejmp: detalle01">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>



              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdprd'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>
<!--------------------- psd ------------------------->
<!--------------------- close ------------------------->


<div class="modal fade" id="close_<?php echo  $g->idpro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                   <input type="hidden" value="<?php echo  $g->idpro; ?>" name="txtidpro">     
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


<div class="modal fade" id="done_<?php echo  $g->idpro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                   <input type="hidden" value="<?php echo  $g->idpro; ?>" name="txtidpro">     
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
<!------------------------------------------------ actualizar foto ------------------------------------------->
<div class="modal fade" id="foto_<?php echo  $g->idpro; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Actualizar foto producto</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-6 col-lg-12">
        <div class="form-group">
            <label for="email2">Codigo del producto</label>
            <input type="text"  readonly="" value="<?php echo  $g->codpro; ?>" class="form-control" id="" name="txtnomcodpro" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->idpro; ?>" name="txtidpro">
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
    <input type="hidden" value="<?php echo  $g->idpers; ?>" name="txtidpers">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-email" class="badge badge-danger"></span>
        </div>
    </div>


              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stuupdprdft'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>