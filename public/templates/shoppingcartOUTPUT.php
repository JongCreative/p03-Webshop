<?php

    include "../db_connection.php";
 
    $user_id = $_SESSION['user_id']; 

    $sql = "SELECT      user.user_id,
                        products.product_id,
                        products.product_img_urla_tilted,
                        products.product_brand,
                        products.product_model,
                        products.product_price

            FROM        user, products
            
            INNER JOIN  orders ON product.product_id = orders.product_id
            INNER JOIN  user ON orders.user_id = user.user_id
            WHERE       user.user_id = $user_id
            ";
    
    $data = $conn->query($sql);
  
     foreach ($data as $row) {
        echo '<article class="wrapper-card-single wrapper-card-single-' . $row['product_brand'] . '">' .
             '<section class="productCart-single productCart-single1 productCart-header">' .
             '<div class="positioningPhoto positioningPhoto1"> ' .
             '<a class="product" href="#product_img_urla_tilted">' .
             '<img class="productCart-imgLink" src="img/' . $row['product_img_urla_tilted'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</div> ' .
             '<div class="positioningPhoto positioningPhoto2"> ' .
             '<article class="positioningPhoto-inner"> '.
             '<a class="product" href="#product_img_urlb_front">' .
             '<img class="product-single-img" src="img/' . $row['product_img_urlb_front'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</article> '.
             '<article class="positioningPhoto-inner"> '.
             '<a class="product" href="#product_img_urlc_bottom">' .
             '<img class="product-single-img" src="img/' . $row['product_img_urlc_bottom'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</article> '.
             '<article class="positioningPhoto-inner"> '.
             '<a class="product" href="#product_img_urld_side">' .
             '<img class="product-single-img" src="img/' . $row['product_img_urld_side'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</article> '.
             '<article class="positioningPhoto-inner"> '.
             '<a class="product" href="#product_img_urle_detailed">' .
             '<img class="product-single-img" src="img/' . $row['product_img_urle_detailed'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</div> ' .
             '</section>' .
             '<section class="productCart-single productCart-body">' .
             '<h3>' . $row['product_brand'] . ' ' . $row['product_model'] . '</h3>' .
             '<p class="card-single">description' . nl2br(nl2br($row['product_description'])) . '</p>' .
             '<p class="card-single">weight: ' . $row['product_weight'] . ' gram<br/>battery life: ' . $row['product_batterylife'] . ' hours</p>' .
             '<p class="card-single">price: € ' . $row['product_price'] .             
             '<form class="productCart-footer-form" method="GET" action="../includes/addToCard.php">'.
             '<section class="productCart-footer-form-row">'.
             /* '<input class="input-row" type="hidden" name="hidden_line" value="<?php echo$hidden_output?>">'. */
             '<input class="input-row" type="number" name="i1" min="1" max="10">'.
             '</section>'.
             '<section class="productCart-footer-form-row">'.
             '<button class="btn5 productCart-form-right" type="submit"><a href="includes/addToCart.php?cart_id=' . $row['product_id'] . '">add to cart</a></button>'.
             '</section>'.
             '</form>'.
             '</section>'.
             '</article>';
    }

    $conn = null;    
?>