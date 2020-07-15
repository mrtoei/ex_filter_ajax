<?php
class DB{
    public function connectDB(){
        $servername = "localhost";
        $username = "root";
        $password = "@Admin1234";
        $dbname = "production";

        // Create connection
        return $conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
    }
}

?>