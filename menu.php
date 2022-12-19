
<link rel="stylesheet" type="text/css" href="css/style.css">
<ul>
						<li><a href="login.php">Home</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<?php @session_start();
						if(isset($_SESSION['cid'])){ ?>
							<li><a href="logout.php">Logout</a></li>
						<?php } ?>
						
					</ul>
					