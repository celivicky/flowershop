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




              </div>

        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
             
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>
<!--------------------- psd ------------------------->
<!--------------------- check ------------------------->

<div class="modal fade" id="done_<?php echo  $g->idord; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                     <label  class="control-label"><strong><center>Atender?</center></strong></label>
                       <p>Esá seguro de atender el delivery?</p>        
                </div>
        <form enctype="multipart/form-data" method="POST"  autocomplete="off">
                   <input type="hidden" value="<?php echo  $g->idord; ?>" name="txtidord">     
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">No, cancelar</button>
                 <button class="btn btn-dark" name='stupdact'>Si, atender</button>
            </div>
        </form>
    </div>
        </div> 
        </div>
    </div>
</div>


<!-- Mensajeria -->

<div class="modal fade" id="mensa_<?php echo  $g->idord; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Enviar mensaje</center></strong></label>
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
            <input type="hidden" value="<?php echo  $g->correo; ?>" name="email" id="email">
            <input type="hidden"  value="<?php echo  $g->nomclie  ; ?>"  id="nombre" name="nombre">
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
            <label for="email2">Correo del cliente</label>
            <input type="text"  readonly="" value="<?php echo  $g->correo; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


        <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Mensaje</label><span class="badge badge-danger">*</span>
            <input type="text"  required="" class="form-control" id="" name="mensaje" placeholder="ejmp: mensaje">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


            <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Archivo</label><span class="badge badge-danger">*</span>
            <input type="file"  required class="form-control" id="my_file" name="my_file" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>

              </div>

        <div class="modal-footer">
          <button name='stnotiserv' class="btn btn-success text-white"><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Enviar</button> 
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
             
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>


<!-- foto vizualizar -->



<div class="modal fade" id="foto_<?php echo  $g->idord; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class="modal-header">
                <label class="control-label" style="text-align: center;"><strong><center>Visualizacion del pago por yape</center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
              <div class="row">
                

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Nombre del cliente</label>
            <input type="text"  readonly="" value="<?php echo  $g->nomclie; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <input type="hidden" value="<?php echo  $g->correo; ?>" name="email" id="email">
            <input type="hidden"  value="<?php echo  $g->nomclie  ; ?>"  id="nombre" name="nombre">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


        <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <label for="email2">Apellido del cliente</label>
            <input type="text"  readonly="" value="<?php echo  $g->apeclie; ?>" class="form-control" id="" name="txtnomcat" placeholder="ejmp: marketing">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>



    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label for="email2">Imagen</label>
            <center><img height="300" width="300" src="../../backend/images/subidas/<?php echo  $g->foto; ?>" ></center>
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
            
        </div>
    </div>


              </div>

        <div class="modal-footer">
          
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
             
            </div>  
            </form>  
          </div>  
        </div> 
     </div> 
  </div>  
</div>