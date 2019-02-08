<?php

//name a class
class database {

    //set connection variables to private/public/bla = what to process;
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webshop";
    public  $connection;

    //create function with functionname(to do something with the variables)
    public function getDatabaseConnection(){

        //there is not connection at the moment
        $this -> connection = null;

        //tell the function what to do first
        try {
            //try to create mysql connection with the variables initiated in the beginning
            $connnect = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully: <br>";
            echo "<br>";
            }
            //in case something goes wrong, we will try to catch the prob
            catch (PDOException $e) {
                //print_r($e)
                echo "Connection failed: " . $e->getMessage();
            }
        return $this->connection;
    }
}
?>