<?php

if (isset($_POST['stupddesac'])) {
   
    $idclie = trim($_POST['txtidclie']);

    try {
        $query = "UPDATE clientes SET estado = '0' WHERE idclie = :idclie LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            
            
            
            ':idclie' => $idclie
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("Desactivar!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../historial/cliente.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../historial/cliente.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../historial/cliente.php";
                });
            </script>';
        exit(0);
    }
}

?>