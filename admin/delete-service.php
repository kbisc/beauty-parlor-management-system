<?php
include 'config.php';

$sid = $_GET['sid'];

$ret=mysqli_query($conn,"delete from  services_table where sid =$sid");
header('location:manage-service.php');
?>