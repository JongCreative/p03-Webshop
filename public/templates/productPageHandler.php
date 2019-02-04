<?php

    include "../db_connection.php";
 
    $product_id = $_GET['product_id']; 

    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    
    $data = $conn->query($sql);
  
     foreach ($data as $row) {
        echo '<section class="wrapper-products3 wrapper-products3-' . $row['product_brand'] . '">' .
             '<a class="product" href="productpage.php?product_id=' . $row['product_id'] . '">' .
             '<img class="product" src="img/' . $row['product_img_urla_tilted'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '<h3>' . $row['product_brand'] . ' ' . $row['product_model'] . '</h3>' .
             '<p>' . 'color: ' . $row['product_color'] . '<br/>' . $row['product_description'] . '</p>' .
             '</section>';
    }

    $conn = null;    
?>