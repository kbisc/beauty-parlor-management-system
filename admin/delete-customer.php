<?php
include 'config.php';

$cid = $_GET['cid'];

$ret=mysqli_query($conn,"delete from  customers_table where cid =$cid");
header('location:customer-list.php');
?>