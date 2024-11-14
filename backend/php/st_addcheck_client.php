<?php
    

    if(isset($_POST['order_client'])){
        //
        //$stck=$_POST['st'];
       // $quanti=$_POST['quantity'];
        $idpro=$_POST['stpro'];
        //
        $user_id=$_POST['txtidsur'];
        $user_cli=$_POST['txtidcli'];
        $method=$_POST['txtcompr'];
        $placed_on = date('d-M-Y');
        //$placed_on=$_POST['txtdate'];
        
        $tipc = $_POST['txttppg'];


        //delivery
        $ourentre = $_POST['txtfeentre'];
        $tiemp = $_POST['txtourent'];
        $distri = $_POST['txtdistrr'];
        $direcenvio = $_POST['txtdirecc'];
        $refer = $_POST['txtreff'];
        $deen = $_POST['txtdee'];
        $paren = $_POST['txtparaa'];
        $mendedi = $_POST['txtdedi'];


        $idsit = $_POST['sitio'];

        $montsit = $_POST['precio'];




        $cart_total = 0;
        $cart_products[] = '';

        $card_id=$_POST['idcart'];
        $total_products1=$_POST['product1'];
        $quantity1 = $_POST['canti'];

        $imgFile = $_FILES['foto']['name'];
        $tmp_dir = $_FILES['foto']['tmp_name'];
        $imgSize = $_FILES['foto']['size'];

    $upload_dir = '../../backend/images/subidas/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $foto = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$foto);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }



        $cart_query = $connect->prepare("SELECT cart.idv, cart.user_id,productos.idpro, productos.codpro, productos.nompro, productos.detpro, productos.stock, productos.prec1, productos.prec2, cart.name, cart.price, cart.quantity FROM cart INNER JOIN productos ON cart.idpro = productos.idpro WHERE  user_id = ?");
        $cart_query->execute([$user_id]);


        if($cart_query->rowCount() > 0){
      while($cart_item = $cart_query->fetch(PDO::FETCH_ASSOC)){
         $cart_products[] = $cart_item['name'].' ( '.$cart_item['quantity'].' )';
         $sub_total = ($cart_item['prec1'] * $cart_item['quantity']);
         $cart_total += $sub_total;
      };
   };

  $prectota = $cart_total -  $montsit;



   $total_products = implode(', ', $cart_products);

   $order_query = $connect->prepare("SELECT * FROM `orders` WHERE method = ?  AND total_products = ? AND total_price = ? AND tipc = ? AND ourentre = ? AND tiemp = ?  AND distri = ?  AND direcenvio = ?  AND refer = ?  AND deen = ?  AND paren = ?  AND mendedi = ?  AND idsit = ?");
   $order_query->execute([$method, $total_products, $prectota, $tipc,$ourentre,$tiemp,$distri,$direcenvio,$refer,$deen,$paren,$mendedi,$idsit]);


   if($prectota == 0){
      $message[] = 'Tu carrito esta vacío';
   }elseif($order_query->rowCount() > 0){
      $message[] = 'pedido realizado ya!';
   }else{

      $insert_order = $connect->prepare("INSERT INTO `orders`(user_id, user_cli, method, total_products, total_price, placed_on,payment_status, tipc, ourentre,tiemp,distri,direcenvio,refer,deen,paren,mendedi,idsit,foto) VALUES(?,?,?,?,?,?, 'Pendiente', ?,?,?,?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $user_cli, $method,$total_products, $prectota, $placed_on, $tipc,$ourentre,$tiemp,$distri,$direcenvio,$refer,$deen,$paren,$mendedi,$idsit,$foto]);
      
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
            window.location = "../administrador_cliente/index.php";
        });
        </script>'; 
      }



     
     
   }


    }

?>