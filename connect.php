<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'jobs';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "connection failed".$conn->connect_error;
    exit();
}

?>