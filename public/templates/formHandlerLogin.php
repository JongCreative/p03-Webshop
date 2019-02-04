<?php   
     
$user_name      = $_POST['user_email'];
$user_password  = $_POST['user_password'];

include '../../db_connection.php';

try {
    $sql = 'INSERT INTO customer (`user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`)
            VALUES (:userName, :user_password, :user_firstname, :user_lastname, :user_email)';
            
    $smt = $conn->prepare($sql);

    $smt->execute(array(
        ':userName'         => $user_name,
        ':user_password'    => $user_password,
        ':user_firstname'   => $user_firstname,
        ':user_lastname'    => $user_lastname,
        ':user_email'       => $user_email
        ));
    echo 'Registered successfully';
    }
catch(PDOException $e)
    {
        echo $sql . '<br>' . $e->getMessage();
    }

$conn = null;
header('location:../index.php');

?>