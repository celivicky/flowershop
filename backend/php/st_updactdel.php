<?php

if (isset($_POST['stupdact'])) {
    //$nomcat = trim($_POST['txtnomcat']);
    $idord = trim($_POST['txtidord']);

    try {
        $query = "UPDATE orders SET payment_status = 'Atendido' WHERE idord = :idord LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            
            ':idord' => $idord
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("Atendido!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../historial/delivery.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../historial/delivery.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../historial/delivery.php";
                });
            </script>';
        exit(0);
    }
}

?>