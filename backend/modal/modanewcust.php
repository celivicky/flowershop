<!-- NUEVO -->
<div class="modal fade" id="newclie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                 <label class="control-label" style="text-align: center;"><strong><center>Nuevo cliente </center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

    
            <div class="modal-body">
                <div class="alert alert-warning">
  <strong>Estimado usuario!</strong> Los campos remarcados con <span class="text-danger">*</span> son necesarios.
</div>
                <div class="container-fluid">
                    <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
 <div class="row">
      
    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Nombre del cliente</label><span class="badge badge-danger">*</span>
            <input type="text" required  class="form-control" id="" name="txtnomcli" placeholder="ejmp: joe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Apellido del cliente</label><span class="badge badge-danger">*</span>
            <input type="text" required  class="form-control" id="" name="txtapcl" placeholder="ejmp: doe">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 


            <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Telefono del cliente</label><span class="badge badge-danger">*</span>
            <input type="text" maxlength="9" required  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txttelcl" placeholder="ejmp: 999898989">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 


            <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Genero del cliente</label><span class="badge badge-danger">*</span>
            <select class="form-control" name="txtsexcl" required>
               
                <option>-------Seleccione-------</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                
            </select>
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Correo del cliente</label><span class="badge badge-danger">*</span>
            <input type="email"  required   class="form-control" id="" name="txtcorcl" placeholder="ejmp: admin09@gmail.com">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Contraseña del cliente</label><span class="badge badge-danger">*</span>
            <input type="password"  required   class="form-control" id="" name="txtconcl" placeholder="ejmp: ********">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 


 </div>  

                      <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stadddcust'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>                     
                    </form>

 
   
                </div>
            

        </div>

            

        </div>
    </div>
</div> 


