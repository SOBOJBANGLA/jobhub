<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM category WHERE id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: list_of_category.php");
}






?>