<?php
  
$user_email     = $_POST['user_email'];
$user_password  = $_POST['user_password'];
$user_firstname = $_POST['user_firstname'];
$user_lastname  = $_POST['user_lastname'];

include '../../db_connection.php';

try {
    $sql = 'INSERT INTO user (`user_email`, `user_password`, `user_firstname`, `user_lastname`)
            VALUES (:user_email, :user_password, :user_firstname, :user_lastname)';
            
    $smt = $conn->prepare($sql);

    $smt->execute(array(
        ':user_email'       => $user_email,
        ':user_password'    => $user_password,
        ':user_firstname'   => $user_firstname,
        ':user_lastname'    => $user_lastname,
        ));
    echo 'Registered successfully';
    }
catch(PDOException $e)
    {
        echo $sql . '<br>' . $e->getMessage();
    }

$conn = null;
//header('location:../index.php');
     
?>