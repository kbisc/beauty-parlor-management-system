<?php
session_start();
error_reporting(0);
include'config.php';

?>





<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#service {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#service td, #service th {
  border: 1px solid #ddd;
  padding: 8px;
}

#service tr:nth-child(even){background-color: #f2f2f2;}

#service tr:hover {background-color: #ddd;}

#service th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
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
				<h1 class="colorchange">Services</h1>
				<p>We provide different kinds of services<br> with affordable of price.<br>We use top qaulity of branded products .</p>

				
			</div>
					<div class="service">
					<div class="title-text">
						<h2>Our Services Price</h2>
						<p>Following are the services with their price</p>
						
					</div>

					
					<table id="service"> 
						<thead>
						 <tr>
						 <th>SN</th>
						 <th>Service Name</th>
						 <th>Service Price</th> 
						</tr> 
					</thead>
					 <tbody>
						<?php
						$ret=mysqli_query($conn,"select *from  services_table");
						$cnt=1;
						while ($row=mysqli_fetch_array($ret)) {

						?>

			             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?></td> </tr>   <?php 
						$cnt=$cnt+1;
						}?>
					</tbody>
						 </table> 
			</div>
		</section>

		
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
	
		
					
				
				
				
</header>
</body>
</html>