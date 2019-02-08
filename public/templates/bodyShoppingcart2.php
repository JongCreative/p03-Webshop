<?php

include "../db_connection.php";

$product_id = $_GET['product_id'];

$sql_querie = "SELECT user.user_id,
					  products.product_id,
					  products.product_img_urla_tilted,
					  products.product_brand,
					  products.product_model,
					  products.product_price
				FROM  user

				INNER JOIN  orders ON product.product_id = orders.product_id
				INNER JOIN  products ON orders.product_id = product.product_id
				WHERE       user.user_id = $user_id
";
    
$db_result = $conn->query($sql_querie);

foreach ($db_result as $row) {
	echo	'<section class="container-cart container-cart-body"> '.
				' <article class="wrapper-cart wrapper-cart-body"> '.
				' <section class="cart cart-body cart-body-header"> '.
				' <p class="table table1">product_imgurl</p> '.
				' <p class="table table2">product_description</p> '.
				' <p class="table table3">product_price</p> '.
/* 			 ' <p class="table table4">product_qty</p> '.
				' <p class="table table5">product_total</p> '.
				' <p class="table table6">remove item</p> '. */
				' </section> '.
				' <section class="cart cart-body cart-body-items">' .
				' <p class="table table-shop table1"><img class="product_img" src="img/' . $row['product_img_urla_tilted'] . '.jpg' . '" alt="' . $row['product_model'] . '"/></p>'.
				' <p class="table table-shop table2">' . $row['product_description'] . '</p>'.
				' <p class="table table-shop table3">' . $row['product_price'] . '</p>'.
/* 			 ' <p class="table table-shop table4">qty</p> '.
				' <p class="table table-shop table5">total</p> '.
				' <p class="table table-shop table6">remove item</p> '. */
				' </section> '.
				' <section class="cart cart-body cart-body-summary"> '.
				' <p class="table table7">whitespace</p> '.
				' <p class="table table9">total price:</p> '.
				' <p class="table table10">calculated price</p> '.
				' </section> '.
				' <section class="cart cart-body cart-body-summary"> '.
				' <h6>whitespace</h6> '.
				' </section> '.
				' </article> '.
			' </section> ';
}

$conn = null;