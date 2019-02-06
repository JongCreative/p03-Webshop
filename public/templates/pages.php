<?php

//add to addToCart

$pages = $_GET['pages'];
$page = 'templates/' . $pages .  '.php';

if(file_exists($page)){
    include($page);
    }
    elseif($page==''){
        echo 'no page';}
    else {
        echo 'can not find page';}
?>