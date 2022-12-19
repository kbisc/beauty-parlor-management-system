<?php
include 'config.php';

$aid = $_GET['aid'];

$ret=mysqli_query($conn,"delete from  appointments_table where aid =$aid");
header('location:appointment-list.php');
?>