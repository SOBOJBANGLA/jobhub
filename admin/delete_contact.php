<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM contact WHERE id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: visitor_contact.php");
}






?>