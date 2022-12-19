<?php
include 'config.php';

$id = $_GET['id'];

$ret=mysqli_query($conn,"delete from  comments_table where id =$id");
header('location:comment-list.php');
?>