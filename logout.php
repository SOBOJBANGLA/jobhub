<?php 
session_start();
session_destroy();
//header('location:logout.php');

header('location:sign_in.php');

?>