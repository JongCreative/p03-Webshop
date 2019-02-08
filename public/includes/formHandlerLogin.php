<?php   

session_start();

include '../../db_connection.php';
/* 
    //check if any login data form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //if so, we will tpass the POSTed data to the verify_login method inside the $login class
        $login_status = $login->verify_login($_POST);
    }

    //on every page load we are going to verify the session
    //it checks the session data and see if there are any sessions related to the user being logged in
    if ($login->verify_session()) {
        //if it excist it is going to check it against the config file to make sure no mojo is messing arround
        //if the user is really a user in the system that this will allow the session to continiu
        $user = $login->user;
 */        
    if(isset($_POST['user_email']) && isset($_POST['user_email'])){

        $user_email      = $_POST['user_email'];
        $user_password  = $_POST['user_password'];

        $sql = "SELECT user_firstname 
                FROM user
                WHERE user_email = '$user_email'
                AND user_password ='$user_password'
                ";
                
        $db_result = $conn->query($sql);

        if ($db_result->rowCount() != 0){
            foreach($db_result as $row){
                $user_firstname = $row['user_firstname'];
            }
            $_SESSION['user_firstname'] = $user_firstname;
            echo "welkom " . $firstname;
            header('location:../welcome.php');
            var_dump($firstname);
        }
        else 
        {
            echo 'The username or password is incorrect!';
            //header("location:../login.php");
        }
        
        $conn = null;
    }else{
        echo "vul je wachtwoord en email in";
    }
?>