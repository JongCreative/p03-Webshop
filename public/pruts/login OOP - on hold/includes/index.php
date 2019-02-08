<?php

//index.php = loginFormHandler

require_once('load.php');

//Handle logins
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login_status = $login->verify_login($_POST); // loop through class login, the session will be created if there are matches, (x__X)
}

//Verify if the session variable excist - and include the correct file base on the template file
if ($login ->verify_session()) {
    $user = $login-> user;          //$ user is equal to the user property from the login class,
                                    //1 verify session, 2 verify if the username is valid, 3 grab data from user, 
                                    //4 store in $user variable so we can access the data on this page

    include('home.php');
} else {
    include('login.php');   //redirect to login page if not verified
}