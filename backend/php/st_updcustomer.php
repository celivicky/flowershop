<?php

if (isset($_POST['stuupdcust'])) {
    $nomclie = trim($_POST['txtnomcli']);
    $apeclie = trim($_POST['txtapcl']);
    $sexclie = trim($_POST['txtsexcl']);
    $telclie = trim($_POST['txttelcl']);
    $correo = trim($_POST['txtcorcl']);
    

    
    $idclie = trim($_POST['txtidclie']);

    try {
        $query = "UPDATE clientes SET nomclie = :nomclie,apeclie = :apeclie,sexclie = :sexclie,telclie = :telclie,correo = :correo WHERE idclie = :idclie LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':nomclie' => $nomclie,
            ':apeclie' => $apeclie,
            ':sexclie' => $sexclie,
            ':telclie' => $telclie,
            ':correo' => $correo,
            
            
            ':idclie' => $idclie
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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