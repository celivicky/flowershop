<?php

if (isset($_POST['stupdact'])) {
    //$nomcat = trim($_POST['txtnomcat']);
    $idcat = trim($_POST['txtidcat']);

    try {
        $query = "UPDATE categoria SET estado = '1' WHERE idcat = :idcat LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            
            ':idcat' => $idcat
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("Activado!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../historial/categoria.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../historial/categoria.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../historial/categoria.php";
                });
            </script>';
        exit(0);
    }
}

?>