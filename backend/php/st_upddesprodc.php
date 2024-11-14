<?php

if (isset($_POST['stupddesac'])) {
    
    
    $idpro = trim($_POST['txtidpro']);

    try {
        $query = "UPDATE productos SET estado = '0' WHERE idpro = :idpro LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            
            
            ':idpro' => $idpro
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("Desactivado!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../historial/producto.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../historial/producto.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../historial/producto.php";
                });
            </script>';
        exit(0);
    }
}

?>