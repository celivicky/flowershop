<?php
    

    if(isset($_POST['order'])){
        //
        $stck=$_POST['st'];
        $quanti=$_POST['quantity'];
        $idpro=$_POST['stpro'];
        //
        $user_id=$_POST['pdrus'];
        $user_cli=$_POST['cxtip'];
        $method=$_POST['cxtcre'];
        //$placed_on = date('d-M-Y');
        $placed_on=$_POST['txtdate'];
        
        $tipc = $_POST['cxcom'];


        //delivery
        $ourentre = $_POST['txtfeent'];
        $tiemp = $_POST['txtourent'];
        $distri = $_POST['txtdistrr'];
        $direcenvio = $_POST['txtdirecc'];
        $refer = $_POST['txtreff'];
        $deen = $_POST['txtdee'];
        $paren = $_POST['txtparaa'];
        $mendedi = $_POST['txtdedi'];




        $cart_total = 0;
        $cart_products[] = '';

        $card_id=$_POST['idcart'];
        $total_products1=$_POST['product1'];
        $quantity1 = $_POST['canti'];

        $cart_query = $connect->prepare("SELECT cart.idv, cart.user_id,productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro WHERE  user_id = ?");
        $cart_query->execute([$user_id]);


        if($cart_query->rowCount() > 0){
      while($cart_item = $cart_query->fetch(PDO::FETCH_ASSOC)){
         $cart_products[] = $cart_item['name'].' ( '.$cart_item['quantity'].' )';
         $sub_total = ($cart_item['prec1'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      };
   };


   $total_products = implode(', ', $cart_products);

   $order_query = $connect->prepare("SELECT * FROM `orders` WHERE method = ?  AND total_products = ? AND total_price = ? AND tipc = ? AND ourentre = ? AND tiemp = ?  AND distri = ?  AND direcenvio = ?  AND refer = ?  AND deen = ?  AND paren = ?  AND mendedi = ?");
   $order_query->execute([$method, $total_products, $cart_total, $tipc,$ourentre,$tiemp,$distri,$direcenvio,$refer,$deen,$paren,$mendedi]);


   if($cart_total == 0){
      $message[] = 'Tu carrito esta vacío';
   }elseif($order_query->rowCount() > 0){
      $message[] = 'pedido realizado ya!';
   }else{

      $insert_order = $connect->prepare("INSERT INTO `orders`(user_id, user_cli, method, total_products, total_price, placed_on,payment_status, tipc, ourentre,tiemp,distri,direcenvio,refer,deen,paren,mendedi) VALUES(?,?,?,?,?,?, 'Pendiente', ?,?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $user_cli, $method,$total_products, $cart_total, $placed_on, $tipc,$ourentre,$tiemp,$distri,$direcenvio,$refer,$deen,$paren,$mendedi]);
      
      $delete_cart = $connect->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);


      $tamanio = count($quantity1);
      for ($i=0; $i < $tamanio ; $i++) { 
          $statement3 = $connect->prepare("UPDATE productos SET stock = stock - $quantity1[$i] WHERE idpro = $total_products1[$i];");
          $inserted = $statement3->execute(); 
      }

      if ($inserted>0) {
          echo '<script type="text/javascript">
swal("¡Registrado!", "El delivery se realizo con exito", "success").then(function() {
            window.location = "../historial/delivery.php";
        });
        </script>'; 
      }



     
     
   }


    }

?>