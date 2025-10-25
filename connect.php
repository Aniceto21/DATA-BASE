<?php
$host="localhost";
$username="root";
$password="";
$db="login";
$connection= new mysqli($host,$username,$password,$db);
 if($connection->connect_error) {
    echo "Connection failed to DB: " . $connection->connect_error;
 }
?>