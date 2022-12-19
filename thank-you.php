<?php
session_start();
error_reporting(0);
include 'config.php';
  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Thank-you page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		
		<nav>
			<div class="row">
				<img src="images/logo.png" class="logo">
			</div>
				<div class="menu">
					<?php require_once 'menu.php'; ?>
				</div>
				
			</nav>
			<div class="content">
				<h1 class="colorchange">THANK YOU</h1>
				
				<h5>Thank you for applying. Your Appointment id is <?php echo $_SESSION['aptno']; color:"#bf55ec"?> </h5>
				<br>
				<a href="search-appointment.php" class="btn btn-nav">Search appointment details</a>	
        </div>
				
			</header>
		</body>
		</html>
		