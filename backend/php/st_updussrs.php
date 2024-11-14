<?php

if (isset($_POST['stupdusrr'])) {
    $usuario = trim($_POST['txtusu']);
    $nombre = trim($_POST['txtname']);
    $correo = trim($_POST['txtcorr']);
    
    $id = trim($_POST['txtid']);

    try {
        $query = "UPDATE usuarios SET usuario = :usuario,nombre = :nombre,correo = :correo WHERE id = :id LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':usuario' => $usuario,
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':id' => $id
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
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