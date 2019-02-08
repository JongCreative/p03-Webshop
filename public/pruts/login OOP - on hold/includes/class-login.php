<?php
class login {
    public $user;

    public function __construct() {
        global $users;  //This is a constructor METHOD
                        //globalize the $users array from the config.php file, 
                        //because it was put in a global scope, we need to globalize it in this function

        SESSION_START(); //start session before any output

        $this->users = $users;  //So we dont have globalize it in every other function,
                                //this property is called users, and we can use it throughout this class
    }
    public function verify_login($post) {
        if (! isset ($post['username']) || ! isset ($post['user_password'])) {
            return false; // if either one not set, not logged in = no session being started
        }
        echo '<br /><br />';
        var_dump($this->users);
        echo '<br /><br />';
        
        var_dump($_POST['username']);
        echo '<br /><br />';

        $user = in_array($post['username'], $this->users); //check the username passed 
                                                                    //by looping throught the $users array inside the config file
        var_dump($user);
        echo '<br /><br />';
        
        if (false != $user) {
            if ($post['user_password'] == $user['user_password']) { //if there is a match continiu to check the user_password submitted against the password in the config file.
                $_SESSION['username'] == $user['username'];         //if there is a match we are going to set a session called['username'] equal to the ['username'] that we got from the config file

                return true;
            }
        }
        return false;
    }

    public function verify_session() {                          //verify the session, get the session variable created right above
        $username = $_SESSION['username'];                      //for security reasons, on every page load, we are going to run
        $user = in_array($username, $this->users);     //the session variable created above again and check it against the config file

        if (false != $user) {           //if it really matches we are going to set this user property equal to the $user we pulled from the config file
            $this->user = $user;        //and we will give acces to the array data

            return true;                // we use this to instanciate an instance at the bottom of this file!
                                        // so you can access the class property with $user = $login->user; 
        }
        return false;
    }
    
}
$login = new login; //creating an instance
                    //every page that this is included into, youre going to create
                    // a new instance of this class
var_dump($login);