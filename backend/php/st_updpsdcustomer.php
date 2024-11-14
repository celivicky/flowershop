<?php

if (isset($_POST['stuupdpsdcust'])) {
    $clave=MD5($_POST['txtnwcl']);
    $idclie = trim($_POST['txtidclie']);

    try {
        $query = "UPDATE clientes SET clave = :clave WHERE idclie = :idclie LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            ':idclie' => $idclie
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
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