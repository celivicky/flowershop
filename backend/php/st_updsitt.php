<?php
  if(isset($_POST['stuupdsitt']))
{
    $nomsi = $_POST['txtnoms'];
    $detsi = $_POST['txtdescsi'];
    $precsiti = $_POST['txtprecs'];


    $idsit = $_POST['txtidsit'];



       try {

        $query = "UPDATE sitios SET nomsi=:nomsi, detsi=:detsi, precsiti=:precsiti WHERE idsit=:idsit LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomsi' => $nomsi,
            ':detsi' => $detsi,
            ':precsiti' => $precsiti,
            ':idsit' => $idsit
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