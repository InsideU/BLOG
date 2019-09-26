<?php
$host="localhost";
$user="root";
$pass="";
$db="phpblog";

global $conn;
$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die ("Failed to Connect to the database");
}


?>