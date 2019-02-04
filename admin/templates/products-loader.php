<?php

    //destination.PHP

    include "../../db_connection.php";

    $sql_querie = "SELECT * FROM products";
    
    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row) {
        echo '<section class="wrapper wrapper-products1' . $row['product_brand'] . '">' .
             '<a class="product" href="products.php?product_id=' . $row['product_id'] . '">' .
             '<img class="product" src="' . $row['img_url1_tilted'] . '" alt="' . $row['product_model'] . '"/></a>' .
             '<h3>' . $row['product_model'] . '</h3>' .
             '<p>' . $row['product_description'] . '</p>' .
             '</section>';
    }

    $conn = null;
