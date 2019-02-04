<?php

    //destination.PHP

    include "../db_connection.php";

    $sql_querie = "SELECT * FROM products WHERE product_brand='Beats';";
    
    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row) {
        echo '<section class="wrapper-products3 wrapper-products3-' . $row['product_brand'] . '">' .
             '<a class="product" href="productpage.php?product_id=' . $row['product_id'] . '">' .
             '<img class="product" src="img/' . $row['product_img_urla_tilted'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '<h3>' . $row['product_brand'] . ' ' . $row['product_model'] . '</h3>' .
             '<p>' . 'color: ' . $row['product_color'] . '<br/>' . $row['product_description'] . '</p>' .
             '</section>';
    }