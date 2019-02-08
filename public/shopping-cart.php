<?php

session_start();
var_dump($_SESSION['cart']);

$whereIn = implode(', ', $_SESSION['cart'] );           //concat all in the array together seperating them by ', '

//select all data from data base that match this id
$sql= "SELECT * 
       FROM cart
       WHERE product_id 
       IN ($whereIn)
";
echo $sql;