<?php
  if(isset($_POST['stuupdslid']))
{
    $nomsl = $_POST['txtnomsl'];
    $detas = $_POST['txtdes'];


    $idsli = $_POST['txtidsli'];


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

       try {

        $query = "UPDATE slider SET nomsl=:nomsl, detas=:detas, foto=:foto WHERE idsli=:idsli LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomsl' => $nomsl,
            ':detas' => $detas,
            ':foto' => $foto,
            ':idsli' => $idsli
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            echo '<script type="text/javascript">
swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
            window.location = "../administrador/escritorio.php";
        });
        </script>';
            exit(0);
        }
        else
        {
           echo '<script type="text/javascript">
swal("Error!", "Error al actualizar", "error").then(function() {
            window.location = "../administrador/escritorio.php";
        });
        </script>';
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
}


?>