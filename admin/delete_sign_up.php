<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM user1 WHERE id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: sign_up_info.php");
}






?>