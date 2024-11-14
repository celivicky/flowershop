<?php
   //require_once('../../backend/config/Conexion.php');

    if(isset($_POST['add_to_cart'])){

        $user_id=$_POST['pdrus'];
        //$idclie=$_POST['pdrus'];
        $idpro=$_POST['prdt'];
        $name=$_POST['name'];
        $price=$_POST['prec'];
        //$quantity=$_POST['p_qty'];

        $check_cart_numbers = $connect->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
        $check_cart_numbers->execute([$name, $user_id]);

        if ($check_cart_numbers->rowCount() > 0) {
            
            echo '<script type="text/javascript">
swal("Error!", "Ya esta agregado ", "error").then(function() {
            window.location = "../administrador_cliente/carrito.php";
        });
        </script>';
        }
        else{

            $insert_cart = $connect->prepare("INSERT INTO `cart`(user_id, idpro, name, price, quantity) VALUES(?,?,?,?,?)");
            $insert_cart->execute([$user_id, $idpro, $name, $price, '1']);

            //$message[] = 'Agregado correctamente!';

                echo '<script type="text/javascript">
swal("¡Añadido!", "Añadido correctamente", "success").then(function() {
            window.location = "../administrador_cliente/carrito.php";
        });
        </script>';
        }
    }

?>