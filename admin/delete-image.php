<?php
include 'config.php';

$id = $_GET['id'];

$ret=mysqli_query($conn,"delete from  images_table where id =$id");
header('location:image-list.php');
?>