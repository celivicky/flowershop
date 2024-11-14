<?php
require_once('../../backend/bd/ctconex.php');

define('ESTADO_ACTIVO', '1');
define('ROL_ACTIVO', '2');

if (isset($_POST['stadddcust'])) {
    $nomclie = isset($_POST['txtnomcli']) ? trim($_POST['txtnomcli']) : null;
    $apeclie = isset($_POST['txtapcl']) ? trim($_POST['txtapcl']) : null;
    $sexclie = isset($_POST['txtsexcl']) ? trim($_POST['txtsexcl']) : null;
    $telclie = isset($_POST['txttelcl']) ? trim($_POST['txttelcl']) : null;
    $correo = isset($_POST['txtcorcl']) ? trim($_POST['txtcorcl']) : null;
    $clave=MD5($_POST['txtconcl']);

    

    try {
        $connect->beginTransaction();

        // Check if required fields are set
        if ($nomclie !== null && $apeclie !== null && $sexclie !== null && $telclie !== null && $correo !== null && $clave) {


                        // Check if the email already exists
            $checkStatement = $connect->prepare("SELECT COUNT(*) FROM clientes WHERE correo = ?");
            $checkStatement->execute([$correo]);
            $emailExists = (bool)$checkStatement->fetchColumn();

            if ($emailExists) {
                throw new Exception("El correo ya está registrado");
            }

            // Insertar estudiantes en la tabla taller_docente
            $statement = $connect->prepare("INSERT INTO clientes (nomclie,apeclie,sexclie,telclie,correo, clave,rol, estado) VALUES (?, ?,?,?,?,?,?,?)");

            $inserted = $statement->execute([$nomclie,$apeclie,$sexclie,$telclie,$correo,$clave,ROL_ACTIVO, ESTADO_ACTIVO]);

            if (!$inserted) {
                throw new Exception("Error en la inserción de datos");
            }

            // Opcional: Puedes realizar otras operaciones aquí si es necesario

            // Hacer commit si todo está bien
            $connect->commit();
            echo '<script type="text/javascript">
swal("Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../historial/cliente.php";
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