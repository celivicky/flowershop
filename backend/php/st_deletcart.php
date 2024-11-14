<?php 
 
if(isset($_POST['delete_qty']))
{
   
    $idv=trim($_POST['prdt']);
   
   
$st =  $connect->prepare("DELETE FROM cart  WHERE idv=$idv LIMIT 1");

        $inserted = $st->execute(); 
        
       // $inserted = $sta->execute(); 
   
        if($inserted>0){

        echo '<script type="text/javascript">
        swal("Eliminado!", "Eliminado correctamente", "success");
        </script>';


        echo '<script type="text/javascript">
swal("Eliminado!", "Eliminado correctamente", "success").then(function() {
            window.location = "../historial/nuevo_delivery.php";
        });
        </script>';  
        exit(0);                          
}
else{

    echo '<script type="text/javascript">
        swal("Error!", "No se pueden agregar datos", "error");
        </script>';    

    print_r($statement->errorInfo()); 
    }

}

 ?>