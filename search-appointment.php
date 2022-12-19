<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php

include('config.php');

     ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
#search {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#search td, #search th {
  border: 1px solid #ddd;
  padding: 8px;
}

#search tr:nth-child(even){background-color: #f2f2f2;}

#search tr:hover {background-color: #ddd;}

#search th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #bf55ec;
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
				<h1 class="colorchange">Search</h1>
				<p>Search your appointment</p>
				</div>
		



     

<center>
	<form method="post" name="search" action="">
                
  
               <div class="form-group"> <label for="exampleInputEmail1">Search by Appointment Number</label> <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
            
              <br>
              <br>
                <button type="submit" name="search" class="btn">Search</button> </form> 
            </div>
            <br>
            <br>

<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 

            <table id="search"> <thead> <tr> <th>SN</th> <th> Appointment Number</th> <th>Name</th><th>Phone Number</th> <th>Appointment Date</th><th>Appointment Time</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($conn,"select *from  appointments_table where AptNumber like '%$sdata%' || Name like '%$sdata%' || PhoneNumber like '%$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['AptNumber'];?></td> <td><?php  echo $row['Name'];?></td><td><?php  echo $row['PhoneNumber'];?></td><td><?php  echo $row['AptDate'];?></td> <td><?php  echo $row['AptTime'];?></td> </tr>   <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
  <?php } }?></tbody> </table> 
          
          </form>

</center>
</header>
</body>
</html>

