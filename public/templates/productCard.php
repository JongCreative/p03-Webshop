<?php

    //destination.PHP

    include "../db_connection.php";

    $sql_querie = "SELECT * FROM products";
    
    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row) {
        echo '<article class="filterCard wrapper-filterCard wrapper-filtercard-' . $row['product_brand'] . '>' .
             '<section class="productCart productCart-header">' .
             '<a class="productCart-imgLink" href="productpage.php?product_id=' . $row['product_id'] . '">' .
             '<img class="productCart-imgLink productCard-img" src="img/' . $row['product_img_urla_tilted'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></a>' .
             '</section>' .
             '<section class="productCart productCart-body">' .
             '<h3>' . $row['product_brand'] . ' ' . $row['product_model'] . '</h3>' .
             '<p>' . 'color: ' . $row['product_color'] . '<br/>' . $row['product_description'] . '</p>' .
             '</section>'.
             '<section class="productCart productCart-footer">' .
             '<form class="productCart-footer-form" method="GET" action="cartHandler.php">'.
             '<section class="productCart-footer-form-row">'.
             '<input type="hidden" name="hidden_line" value="<?php echo$hidden_output?>">'.
             '<input type="number" name="product_quantity" min="1" max="10">'.
             '</section>'.
             '<section class="productCart-footer-form-row">'.
             '<button class="btn5 productCart-form-right" type="submit"><h3>add</h3></button>'.
             '</section>'.
             '</form>'.
             '</section>'.
             '</article>';
}

$conn = null;