<?php
require_once('../../backend/bd/ctconex.php');

define('ESTADO_ACTIVO', '1');

if (isset($_POST['stadddprod'])) {
    $codpro = isset($_POST['txtcodpro']) ? trim($_POST['txtcodpro']) : null;
    $nompro = isset($_POST['txtnomprd']) ? trim($_POST['txtnomprd']) : null;
    $detpro = isset($_POST['txtdesc']) ? trim($_POST['txtdesc']) : null;
    $stock = isset($_POST['txtsotc']) ? trim($_POST['txtsotc']) : null;
    $idcat = isset($_POST['txtidcat']) ? trim($_POST['txtidcat']) : null;
    $prec1 = isset($_POST['txtpr1']) ? trim($_POST['txtpr1']) : null;
    $prec2 = isset($_POST['txtpr2']) ? trim($_POST['txtpr2']) : null;

    

    try {
        $connect->beginTransaction();

        // Check if required fields are set
        if ($codpro !== null && $nompro !== null && $detpro !== null && $stock !== null && $idcat !== null && $prec1 !== null && $prec2 !== null) {


                        // Check if the email already exists
            $checkStatement = $connect->prepare("SELECT COUNT(*) FROM productos WHERE codpro = ?");
            $checkStatement->execute([$codpro]);
            $emailExists = (bool)$checkStatement->fetchColumn();

            if ($emailExists) {
                throw new Exception("El codigo ya está registrado");
            }

            // Insertar estudiantes en la tabla taller_docente
            $statement = $connect->prepare("INSERT INTO productos (codpro,nompro,detpro,stock,idcat, prec1,prec2, estado) VALUES (?, ?,?,?,?,?,?,?)");

            $inserted = $statement->execute([$codpro,$nompro,$detpro,$stock,$idcat,$prec1,$prec2, ESTADO_ACTIVO]);

            if (!$inserted) {
                throw new Exception("Error en la inserción de datos");
            }

            // Opcional: Puedes realizar otras operaciones aquí si es necesario

            // Hacer commit si todo está bien
            $connect->commit();
            echo '<script type="text/javascript">
swal("Registrado!", "Agregado correctamente", "success").then(function() {
            window.location = "../historial/producto.php";
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