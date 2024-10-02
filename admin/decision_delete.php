<?php
require('connection.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM applicant WHERE id='$id'";


$delete = mysqli_query($conn,$sql);

if($delete){
    echo "Delete";
    header("location: applicant_info.php");
}



?>