<?php
//create $users in global scope
$users = array(
    array(
        'username' => '1',
        'user_password' => '1',
        'name' => '1'
    ),
    array(
        'username' => 'gebruiker2@gmail.com',
        'user_password' => 'pass2',
        'name' => 'naam2'
    )
);
    /* array(
        'user_email' => $user_email,
        'user_password' => $user_password,
        'user_firstname' => $user_firstname,
    ), */
var_dump($users);