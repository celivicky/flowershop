<?php

if (isset($_POST['stupdusrrpsd'])) {
    
    $clave = MD5($_POST['txtnewpsd']);
    
    $id = trim($_POST['txtid']);

    try {
        $query = "UPDATE usuarios SET clave = :clave WHERE id = :id LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':clave' => $clave,
            
            ':id' => $id
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Contraseña actualizada correctamente", "success").then(function() {
                        window.location = "../accesos/usuarios.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../accesos/usuarios.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../accesos/usuarios.php";
                });
            </script>';
        exit(0);
    }
}

?>