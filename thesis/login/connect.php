<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connect failed: " .$conn->connect_error);
    }
?>