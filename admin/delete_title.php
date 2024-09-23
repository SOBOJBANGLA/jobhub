<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM title WHERE id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: list_jobs_title.php");
}



?>