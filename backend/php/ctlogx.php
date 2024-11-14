<?php
//session_start();
require '../backend/bd/ctconex.php';

if (isset($_POST['ctxlog'])) {
    $errMsg = '';

    // Get data from FORM
    $correo = $_POST['correo'];
    $clave = MD5($_POST['clave']);

    if (empty($correo)) {
        $errMsg = 'Digite su correo';
    } elseif (empty($_POST['clave'])) {
        $errMsg = 'Digite su contraseña';
    }

    if (empty($errMsg)) {  
        try {
            $stmt = $connect->prepare('SELECT id, usuario, nombre, correo, clave, rol, estado FROM usuarios WHERE correo = :correo UNION 
                                       SELECT idclie, apeclie,nomclie, correo,clave, rol, estado FROM clientes WHERE correo = :correo');
            $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data === false) {
                $errMsg = "El nombre de correo: $correo no se encuentra, puede solicitarlo con el administrador.";
            } else {
                if ($clave == $data['clave']) {
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['usuario'] = $data['usuario'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['correo'] = $data['correo'];
                    $_SESSION['clave'] = $data['clave'];
                    $_SESSION['rol'] = $data['rol'];
                    $_SESSION['estado'] = $data['estado'];

                    if ($_SESSION['rol'] == 1) {
                        echo "<script language='JavaScript'>";
                        echo "location = 'administrador/escritorio.php'";
                        echo "</script>";
                    }elseif($_SESSION['rol'] == 2){
           echo "<script language='JavaScript'>";
            echo "location = 'administrador_cliente/index.php'";
            echo "</script>";
        }

                    exit;
                } else {
                    $errMsg = 'El correo o la contraseña son incorrectos.';
                }
            }
        } catch (PDOException $e) {
            // Log the error to a file
            error_log($e->getMessage(), 3, "error.log");
            $errMsg = 'Ocurrió un error. Por favor, inténtelo de nuevo.';
        }
    }
}
?>