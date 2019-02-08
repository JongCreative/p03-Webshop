<?php

session_start();

if(empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['cart_id']); 

?>

<p> products was succesfully added to shoppingcart.
    click <a href="../shopping-cart.php">here</a> to view shopping cart
</p>