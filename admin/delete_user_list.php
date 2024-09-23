<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM users WHERE user_id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: list_of_users.php");
}






?>