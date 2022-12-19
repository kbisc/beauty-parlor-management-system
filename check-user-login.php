<?php 
session_start();
if (!isset($_SESSION['cid'])) {
	header('location:login.php');
}
 ?>