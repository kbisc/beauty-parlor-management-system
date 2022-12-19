<?php
include 'config.php';

//error_reporting(0);

?>

<?php
if(isset($_POST['submit'])){
	$err=[];
	//check name
	if(isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])){
		$name= $_POST['name'];
	}else{
		$err['name'] = 'Enter your name';
	}
	if (isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])){
		$email = $_POST['email'];

	}else{
		$err['email'] = 'Enter your email';
	}
	if (isset($_POST['comment']) && !empty($_POST['comment']) && trim($_POST['comment'])){
		$comment = $_POST['comment'];
	}else{
		$err['comment'] = 'Enter your comment';
	}

	if (count($err) == 0) {
		echo $sql = "INSERT INTO comments_table (name, email, comment)VALUES('$name','$email', '$comment')";
		$result= mysqli_query($conn, $sql);

		if($result){
			echo "<script> alert('comment added successfully') </script>";
		}else{
			echo "<script> alert('comment doesnot added') </script>";
		}
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
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
						<li><a href="#">Home</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</div>
				</div>
			</nav>
			<div class="content">
				<h1 class="colorchange">Get a Pretty</h1>
				<p>We provide different kinds of services<br> with help of expert beautician and hairstylist.<br>We use top qaulity of branded products.</p>

				<a href="login.php" class="btn btn-full">login</a>
				<a href="register.php" class="btn btn-nav">register</a>
			</div>

			
			
			<div class="wrapper">
				<form action="" method="POST" class="form">
					<div class="title-text">
						<p>COMMENT</p>
					</div>
					<div class="input-group">
						<label for="name"><b>Name</label>
						<input type="text" name="name" id="name" placeholder="enter your name">
						<?php if (isset($err['name'])) { ?>
							<span class="error"> <?php echo $err['name']; ?></span>
						<?php } ?>
					</div>
					<div class="input-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="enter your email">
						<?php if (isset($err['email'])){ ?>
							<span class="error"> <?php echo $err['email']; ?></span>
						<?php } ?>
					</div>
					<div class="input-group">
						<label for="comment">Comment</label>
						<textarea name="comment" id="comment" placeholder="enter your comment"> </textarea>	
						<?php if (isset($err['comment'])){ ?>
							<span class="error"> <?php echo $err['comment']; ?></span>
						<?php } ?>
					</div>	
					<div class="input-group">
						<button type="submit" name="submit" class="btn">Post comment</button>
						
					</div>
				</form>

				<?php
						$ret=mysqli_query($conn,"select *from  comments_table");
						$cnt=1;
						while ($row=mysqli_fetch_array($ret)) {

						?>

			             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['name'];?></td> <td><?php  echo $row['email'];?></td><td><?php  echo $row['comment'];?></td> </tr>   <?php 
						$cnt=$cnt+1;
						}?>
				

		</header>

		<section id="photo">
			
			<div class="photo-box">
				<div class="single-photo">
					<img src="images/aimage.jpg">
					<img src="images/ledfacial.jpg">
					<img src="images/makeup.jpg">
					<img src="images/service3.jpg">
					
					
		</section>
		<section id="testomonial">
			<div class="title-text">
				
				<h3>What celebrety says</h3>
			</div>
			<div class="testomonial-row">
				
				<div class="testomonial-col">
					<div class="user">
					<img src="images/user1.jpg">
					<div class="user-info">
					<h4>Nora</h4>
				</div>
				</div>
					<p>An appointment with this parlor is like a spa day in an hour. I walk out looking and feeling beautiful. Hairstyle's cuts are enduring, they don't fall apart after the first wash. My hair looks great from the day of my appointment until my next appointment many weeks later.</p>
				</div>
				<div class="testomonial-col">
					<div class="user">
					<img src="images/user4.jpg">
					<div class="user-info">
					<h4>Minniy</h4>
				</div>
				</div>
					<p>When I think about wanting to pamper, treat myself and relax. This is the place I think of straight away , it’s beautiful location and friendly , professional staff make it the only place to go . team have worked so hard to make it the success it is and they truly deserve to get all the awards possible in the future</p>
				</div>
				<div class="testomonial-col">
					<div class="user">
					<img src="images/user3.jpg">
					<div class="user-info">
					<h4>Jinny</h4>
				</div>
				</div>
					<p>A wonderfully friendly and professional parlor, beautiful location and beautifully kept. Great products and product knowledge. Will definitely return.</p>
				</div>
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
					<a href="admin/admin-login.php">Admin</a>
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