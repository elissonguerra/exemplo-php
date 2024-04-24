<?php
    $servernome = "localhost";
    $username = "root";
    $password = "";
    $dbname = "escola";

    //create connection
    $conn = new mysqli($servernome,$username,$password,$dbname);
    if ($conn -> connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
?>