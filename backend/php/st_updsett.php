<?php

if (isset($_POST['stupdcong'])) {
    $nomemp = trim($_POST['txtname']);
    $direcc = trim($_POST['txtdirec']);
    $rucem = trim($_POST['txtrucc']);
    $teleem = trim($_POST['txttel']);
    
    $idconfi = trim($_POST['txtidconfi']);

    try {
        $query = "UPDATE configuracion SET nomemp = :nomemp,direcc = :direcc,rucem = :rucem,teleem = :teleem WHERE idconfi = :idconfi LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomemp' => $nomemp,
            ':direcc' => $direcc,
            ':rucem' => $rucem,
            ':teleem' => $teleem,
            
            ':idconfi' => $idconfi
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../configuracion/ajustes.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../configuracion/ajustes.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../configuracion/ajustes.php";
                });
            </script>';
        exit(0);
    }
}

?>