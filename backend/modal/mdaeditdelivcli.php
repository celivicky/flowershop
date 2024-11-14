<!-- EDIT -->
<div class="modal fade" id="info_<?php echo  $g->idord; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Informacion del delivery</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Nombre del cliente</label>
            <input type="text"  readonly="" value="<?php echo  $g->nomclie; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


        <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Apellido del cliente</label>
            <input type="text"  readonly="" value="<?php echo  $g->apeclie; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


            <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Comprobante</label>
            <input type="text"  readonly="" value="<?php echo  $g->tipc; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Tipo de pago</label>
            <input type="text"  readonly="" value="<?php echo  $g->method; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


        <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Fecha entrega</label>
            <input type="text"  readonly="" value="<?php echo  $g->ourentre; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

            <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Horario entrega</label>
            <input type="text"  readonly="" value="<?php echo  $g->tiemp; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


                <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Distrito</label>
            <input type="text"  readonly="" value="<?php echo  $g->distri; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Direccion</label>
            <input type="text"  readonly="" value="<?php echo  $g->direcenvio; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

        <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Referencia</label>
            <input type="text"  readonly="" value="<?php echo  $g->refer; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

            <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">De</label>
            <input type="text"  readonly="" value="<?php echo  $g->deen; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


                <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Para</label>
            <input type="text"  readonly="" value="<?php echo  $g->paren; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


                    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email2">Mensaje (dedicatoria)</label>
            <input type="text"  readonly="" value="<?php echo  $g->mendedi; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

                        <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="email2">Productos</label>
            <input type="text"  readonly="" value="<?php echo  $g->total_products; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


                        <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="email2">Total</label>
            <input type="text"  readonly="" value="<?php echo  $g->total_price; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>



              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fa fa-times-circle' data-toggle='tooltip' title='crear'></i></button>
             
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>
<!--------------------- psd ------------------------->
<!--------------------- check ------------------------->

