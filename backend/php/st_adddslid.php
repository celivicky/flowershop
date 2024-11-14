    <?php 
require_once('../../backend/bd/ctconex.php');
if(isset($_POST['stadddslid']))
{

    $nomsl=trim($_POST['txtslidd']);
    $detas=trim($_POST['txtdes']);
    
    
      $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];

    $upload_dir = '../../backend/images/subidas/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
  
   // rename uploading image
   $foto = rand(1000,1000000).".".$imgExt;

      // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$foto);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
    
    
       $d3 = $connect->prepare("INSERT INTO slider (nomsl,detas,foto ,estado) VALUES('$nomsl','$detas', '$foto','1')");

             $inserted = $d3->execute();

             if($inserted>0){

        
        
echo '<script type="text/javascript">
swal("Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../administrador/escritorio.php";
        });
        </script>';


}else{  
    
        echo '<script type="text/javascript">
swal("Error!", "Error!", "error");
        </script>';

print_r($sql->errorInfo()); 
}
    


    }

?>