<?php

session_start();

$hidden_output = $_GET['product_quantity'];
$product_quantity = $_GET['product_quantity'];
 
if(isset($_SESSION['productCart'])) {
    $currentNo = $_SESSION['counter'] +1;

    $_SESSION['productCart'][$currentNo] = $hidden_output;
    $_SESSION['product_quantityCart'][0] = $product_quantity;
    $_SESSION['counter'] = $currentNo;
    //if not first time visit
} else {
    //if first time visit, first array will be created, first index will start @0
    $productCart = array();
    $product_quantityCart = array();

    $_SESSION['productCart'][0] = $hidden_output;
    $_SESSION['product_quantityCart'][0] = $product_quantity;
    $_SESSION['counter'] = 0;
}




/* 
$page = 'products.php';            //page to link back to after adding, removing items, w/ functions below

include '../db_connection.php';

//start building functions to access DB & adding to cart

function products(){
    $get = mysqli_query('SELECT product_id, product_model, product_description, product_price
                         FROM products
                         WHERE product_quantity > 0
                         ORDER BY product_id DESC');
    if (mysqli_num_rows($get) ==0){ //get the nr of rows from the above mysql_query)
        echo 'no products to display!'; //if it is 0, no items will be returned
    }
    else {
        echo 'succes'; //we're going to display the products

    }
}
 */