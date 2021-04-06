<?php 
    function createConnection(){
        $DB_SERVER = "localhost";
        $DB_USERNAME = "root";
        $DB_PASSWORD = "";
        $DB_NAME = "db";

        $con = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or die("Can't connect to database");

        return $con;
    }

    $con = createConnection();
?>