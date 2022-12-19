<?php 
include 'config.php';
session_start();
error_reporting(0);
include'config.php';
if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    @session_start();
    $cid=$_SESSION['cid'];
  
    $query=mysqli_query($conn,"insert into appointments_table(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,cid) value('$aptnumber','$name','$email','$phone','$adate','$atime','$cid')");
    // $query->execute();
            $aid = $conn->insert_id;
            foreach($services as $id){
            echo  $sql = "INSERT INTO `appointments_services` ( `aid`, `sid`) VALUES ($aid,$id)";
              $conn->query($sql);
            }
           	 $success =  ' successfully....';
           
           
           
    if ($query) {
$_SESSION['aptno']=$aptnumber;
 ?><script>window.location.href='thank-you.php';</script>
 <?php
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }


 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	

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
				<h1 class="colorchange">Home</h1>
				<p>Welcome to BARSUMY website!!!<br> Please have a look at our services and<br>if you like our services then book a<br> aapointment to make you relax and alittle pretty.</p>
				
        </div>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					
						var dtToday = new Date();
						var month = dtToday.getMonth()+1;
						var day = dtToday.getDate();
						var year = dtToday.getFullYear();
						if(month<10)
							month= '0' + month.toString();
						if(day<10)
							day= '0' + day.toString();
						var maxDate = year + '-' + month + '-' + day;	
						$('#adate').attr('min', maxDate);				
					})
				
			</script>
		</header>

							<div class="title-text">
			              	<h4>Make an Appointment</h4>
			              </div>


							<div class="wrappers">
								<div class="form">
		    				<form action="#" method="post" >
			            
			              
			                <div class="input-group">
			                	<label for="name">Name</label>
					              <input type="text" id="name" placeholder="Name" name="name" required="true">
					            </div>
			              
			              
			                <div class="input-group">
			                	<label for="email">Email</label>
					              <input type="email" id="appointment_email" placeholder="Email" name="email" required="true">
					            </div>
			              
				            
			                <div class="input-group">
					           <label for="services">Services</label>
		                     
		                      <select name="services[]" id="services" multiple="true" style="height: 100px">
		                      	<option value="">Select Services</option>
		                      			<?php $query=mysqli_query($conn,"select * from services_table");
							              while($row=mysqli_fetch_array($query))
							              {
							              ?>
		                       <option value="<?php echo $row['sid'];?>"><?php echo $row['ServiceName'];?></option>
		                       <?php } ?> 
		                      </select>
		                    </div>
					            
			              
			              
			                <div class="input-group">
			                	<label for="date">Date</label>
			                  <input type="date"  placeholder="Date" name="adate" id='adate' required="true">
			                </div>    
			              
			                <div class="input-group">
			                	<label for="time">Time</label>
			                  <input type="time"  placeholder="Time" name="atime" id='atime' required="true">
			                </div>
			              
			                <div class="input-group">
			                	<label for="phone">Phone</label>
			                  <input type="text"  id="phone" name="phone" placeholder="Phone" required="true" maxlength="10" pattern="[0-9]+">
			                </div>
			              
				          
				          <div class="input-group">
			              <input type="submit" name="submit" value="Make an Appointment" class="btn">
			            </div>
			          </form>
		          </div>
		      

		      <div class="image">
			<img src="images/home.jpg" width="450px" height="400px">
		</div>
	</div>
						


		
	</body>
	</html>