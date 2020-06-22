<?php
    function getConnection() {
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud";
        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);
        return $con;
    }
?>
