<?php
require_once('../../backend/bd/ctconex.php');

define('ESTADO_ACTIVO', '1');

if (isset($_POST['stadddcat'])) {
    $nomcat = isset($_POST['txtnomcat']) ? trim($_POST['txtnomcat']) : null;
    

    try {
        $connect->beginTransaction();

        // Check if required fields are set
        if ($nomcat !== null) {

            // Insertar estudiantes en la tabla taller_docente
            $statement = $connect->prepare("INSERT INTO categoria (nomcat,  estado) VALUES (?, ?)");

            $inserted = $statement->execute([$nomcat, ESTADO_ACTIVO]);

            if (!$inserted) {
                throw new Exception("Error en la inserción de datos");
            }

            // Opcional: Puedes realizar otras operaciones aquí si es necesario

            // Hacer commit si todo está bien
            $connect->commit();
            echo '<script type="text/javascript">
swal("Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../historial/categoria.php";
        });
        </script>';


        } else {
            throw new Exception("Faltan datos requeridos");
        }
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        $connect->rollBack();
        echo '<script type="text/javascript">
            swal("Error!", "No se pueden agregar datos: ' . $e->getMessage() . '", "error");
        </script>';
    }
}
?>