<?php

if (isset($_POST['stuupdprd'])) {
    $codpro = trim($_POST['txtnomcodpro']);
    $nompro = trim($_POST['txtnomprd']);
    $detpro = trim($_POST['txtdesc']);
    $stock = trim($_POST['txtsotc']);
    $idcat = trim($_POST['txtidcat']);
    $prec1 = trim($_POST['txtpr1']);
    $prec2 = trim($_POST['txtpr2']);

    
    $idpro = trim($_POST['txtidpro']);

    try {
        $query = "UPDATE productos SET codpro = :codpro,nompro = :nompro,detpro = :detpro,stock = :stock,idcat = :idcat,prec1 = :prec1,prec2 = :prec2 WHERE idpro = :idpro LIMIT 1";
        $statement = $connect->prepare($query);

        $data = [
            ':codpro' => $codpro,
            ':nompro' => $nompro,
            ':detpro' => $detpro,
            ':stock' => $stock,
            ':idcat' => $idcat,
            ':prec1' => $prec1,
            ':prec2' => $prec2,
            
            ':idpro' => $idpro
        ];

        $query_execute = $statement->execute($data);

        if ($query_execute) {
            echo '<script type="text/javascript">
                    swal("¡Actualizado!", "Actualizado correctamente", "success").then(function() {
                        window.location = "../historial/producto.php";
                    });
                </script>';
            exit(0);
        } else {
            echo '<script type="text/javascript">
                    swal("Error!", "Error al actualizar", "error").then(function() {
                        window.location = "../historial/producto.php";
                    });
                </script>';
            exit(0);
        }
    } catch (PDOException $e) {
        // Log the error to a file or handle it appropriately
        error_log($e->getMessage(), 3, "error.log");

        echo '<script type="text/javascript">
                swal("Error!", "Ocurrió un error al actualizar", "error").then(function() {
                    window.location = "../historial/producto.php";
                });
            </script>';
        exit(0);
    }
}

?>