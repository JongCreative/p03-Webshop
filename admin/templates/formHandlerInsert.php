<?php   
     
$product_model              = $_POST['product_model'];
$product_brand              = $_POST['product_brand'];
$product_color              = $_POST['product_color'];
$product_weight             = $_POST['product_weight'];
$product_batterylife        = $_POST['product_batterylife'];
$product_price              = $_POST['product_price'];
$product_description         = $_POST['product_description'];
$product_img_urla_tilted    = $_POST['product_img_urla_tilted'];
$product_img_urlb_front     = $_POST['product_img_urlb_front'];
$product_img_urlc_bottom    = $_POST['product_img_urlc_bottom'];
$product_img_urld_side      = $_POST['product_img_urld_side'];
$product_img_urle_detailed  = $_POST['product_img_urle_detailed'];

include '../../db_connection.php';

try {
    $sql = 'INSERT INTO products (
                `product_model`, `product_brand`, `product_color`, `product_weight`, `product_batterylife`, 
                `product_price`, `product_description`, `product_img_urla_tilted`, `product_img_urlb_front`, 
                `product_img_urlc_bottom`, `product_img_urld_side`, `product_img_urle_detailed`)
            VALUES (
                :product_model, :product_brand, :product_color, :product_weight, :product_batterylife, 
                :product_price, :product_description, :product_img_urla_tilted, :product_img_urlb_front, 
                :product_img_urlc_bottom, :product_img_urld_side, :product_img_urle_detailed)';
            
    $smt = $conn->prepare($sql);

    $smt->execute(array(
        ':product_model'            => $product_model,
        ':product_brand'            => $product_brand,
        ':product_color'            => $product_color,
        ':product_weight'           => $product_weight,
        ':product_batterylife'      => $product_batterylife,
        ':product_price'            => $product_price,
        ':product_description'      => $product_description,
        ':product_img_urla_tilted'  => $product_img_urla_tilted,
        ':product_img_urlb_front'   => $product_img_urlb_front,
        ':product_img_urlc_bottom'  => $product_img_urlc_bottom,
        ':product_img_urld_side'    => $product_img_urld_side,
        ':product_img_urle_detailed'=> $product_img_urle_detailed
        ));
    echo 'Submitted successfully';
    }
catch(PDOException $e){
        echo $sql . '<br>' . $e->getMessage();
    }

$conn = null;
/* header('location:../insert.php'); */

?>