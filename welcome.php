<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
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
					<ul>
						<li><a href="main.php">Home</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</div>
				</div>
			</nav>
			
        
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

	<div class="content">
				<h1 class="colorchange">Welcome</h1>
				<p>Welcome to BARSUMY website!!!</p>

    <p>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</p>
    
        <a href="home.php" class="btn btn-full">Make an Appointment</a>
        <a href="search-appointment.php" class="btn btn-nav">Search appointment details</a>	
			</div>
		</header>


		<section id="footer">
			<div class="title-text">
				<p>CONTACT</p>
				<h3>Visit Shop Today</h3>
			</div>
			<div class="footer-row">
				<div class="footer-left">
					<h4>Opening Hours</h4>
					<p><i class="fa fa-clock-o" ></i> Monday to Friday - 8am to 8pm</p>
					<p><i class="fa fa-clock-o"></i>Saturday and Sunday - 10am to 6pm</p>
				</div>
				<div class="footer-right">
					<h4>Get In Touch</h4>
					<p>Sabitri Colony, Basthali<i class="fa fa-map-marker"></i></p>
					<p>barsumy@gmail.com<i class="fa fa-paper-plane"></i></p>
					<p>0155254, 9855555555<i class="fa fa-phone"></i></p>
					<div class="footer-admin">
					<a href="">Admin</a>
				</div>

				</div>
			</div>
			<div class="social-links">
				<i class="fa fa-facebook" ></i>
				<i class="fa fa-instagram" ></i>
				<i class="fa fa-twitter" ></i>
				<i class="fa fa-youtube-play" ></i>
				<p>Copright BARSUMY beauty parlor</p>
			</div>
		</section>
	</body>
	</html>