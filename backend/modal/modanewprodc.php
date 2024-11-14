<!-- NUEVO -->
<div class="modal fade" id="newprod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                 <label class="control-label" style="text-align: center;"><strong><center>Nuevo producto </center></strong></label>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

    
            <div class="modal-body">
                <div class="alert alert-warning">
  <strong>Estimado usuario!</strong> Los campos remarcados con <span class="text-danger">*</span> son necesarios.
</div>
                <div class="container-fluid">
                    <form enctype="multipart/form-data" method="POST" action="" autocomplete="off">
 <div class="row">
      <?php 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {

    $input_length = strlen($input);

    $random_string = '';

    for($i = 0; $i < $strength; $i++) {

        $random_character = $input[mt_rand(0, $input_length - 1)];

        $random_string .= $random_character;

    }

    return $random_string;

}

             ?>
    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Codigo del producto</label><span class="badge badge-danger">*</span>
            <input type="text" value="<?php echo  generate_string($permitted_chars, 12); ?>"  maxlength="12" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtcodpro" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Nombre del producto</label><span class="badge badge-danger">*</span>
            <input type="text" required  class="form-control" id="" name="txtnomprd" placeholder="ejmp: producto01">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 


    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Precio 1 del producto</label><span class="badge badge-danger">*</span>
            <input type="text" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtpr1" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div> 

        <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Precio 2 del producto</label>
            <input type="text"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtpr2" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Stock del producto</label><span class="badge badge-danger">*</span>
            <input type="text" maxlength="3" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" id="" name="txtsotc" placeholder="ejmp: 10">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>


        <div class="col-md-6 col-lg-4">
        <div class="form-group">
            <label for="email2">Categoria del producto</label><span class="badge badge-danger">*</span>
            <select class="form-control" name="txtidcat" required>
               
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
            <input type="text" required  class="form-control" id="" name="txtdesc" placeholder="ejmp: detalle01">
            <small id="emailHelp2" class="form-text text-muted"></small>
            <span id="error-name" class="badge badge-danger"></span>
        </div>
    </div>   


 </div>  

                      <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='material-icons' data-toggle='tooltip' title='crear'>close</i>Cancelar</button>
                
                 <button class="btn btn-dark" name='stadddprod'><i class='material-icons' data-toggle='tooltip' title='crear'>save</i>Guardar</button>
            </div>                     
                    </form>

 
   
                </div>
            

        </div>

            

        </div>
    </div>
</div> 


