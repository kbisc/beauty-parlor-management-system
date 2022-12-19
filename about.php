<!DOCTYPE html>
<html>
<head>
	<title>About page</title>
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
				</div>
			</nav>
			<div class="content">
				<h1 class="colorchange">About us</h1>
				<p>We have got the experienced staffs who can consult<br> your problems and provide the necessary treatments. <br>We never compormise with our clients hygenic and<br> the quality of products.</p>
        

				
			</div>
		</header>

<div class="title-text">
			              	<h4>Look Images</h4>
			              </div>

<div class="content">

<?php

include "config.php"; // Using database connection file here

$query = $conn->query("SELECT * FROM images_table ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'images/'.$row["file_name"];
?>

    <img src="<?php echo $imageURL; ?>" alt="" width="400" height="400" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
</table>
</div>


		
		
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