<?php

//name a class
//set object to private/public/bla = what to take in;

//create function to do something with it.
//set a startingpoint

// set mysql database connection
class database {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webshop";
    public  $connection;

    public function getDatabaseConnection(){
        $this -> connection = null;

        try {
            $connnect = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully: <br>";
            echo "<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->connection;
    }
}
?>