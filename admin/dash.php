<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
  header("location:admin-login.php");
}
?>

<?php

include('config.php');

     ?>
<!DOCTYPE html>
<html>
<head>
  <title>admin panel</title>
  
  <style>
    body{
      margin: 0;
    }
    div.header{
      color:#black;
      font-family: poppins;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between; 
      padding: 0 60px;
      background-color: #A9EED1;
      padding-left: 600px;
    }
    div.header button{
      background-color: #A9EED1;
      font-size: 16px;
      font-weight: 550;
      padding: 8px 12px;
      border:2px solid #black;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Admin panel<?php echo $_SESSION['AdminLoginId']?></h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <button type="submit" name="Logout">LOGOUT</button>   
      <i class="fa fa-bell" aria-hidder="true" id="notification"></i>
    </form>
    
  </div>




  <?php
  if (isset($_POST['Logout'])) {
    session_destroy();
    header("location:admin-login.php");
  }
  ?>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height:100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #A9EED1;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between; 
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #A9EED1;
  padding-left: 8px;

}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
 
}


</style>
</head>
<body>

<script type="text/javascript">

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("notification").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "notification.php", true);
  xhttp.send();
}
loadDoc();
</script>



<div class="sidenav">
  
  
  <button class="dropdown-btn">Customer 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="customer.php">Add Customer</a>
    
    <a href="customer-list.php">Customer List</a>
    
  </div>

  <button class="dropdown-btn">Appointment 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="add-appointment.php">Add Appointment</a>
    <a href="appointment-list.php">Appointment List</a>
    <a href="edit-appointment.php">Appointment Edit</a>
    
  </div>
  <button class="dropdown-btn">Service 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add-service.php">Add Service</a>
    <a href="manage-service.php">Manage Service</a>
    <a href="edit-service.php">Edit Service</a>
    
    
  </div>
  <button class="dropdown-btn">Comment 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add-comment.php">Add comment</a>
    <a href="comment-list.php">Comment list</a>
    <a href="edit-comment.php">Edit comment</a>
    
  </div>
  
  <button class="dropdown-btn">About 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="add-image.php">Add image</a>
    <a href="image-list.php">Image list</a>
   
    
  </div>
  <div>
    <a href="search-appointment.php">Search</a>
    
  </div>
  
  
   
  
</div>

<div class="main">
  <h2>Dashboard</h2>
  
</div>


          <div class="main">
            <?php $query1=mysqli_query($conn,"Select * from customers_table");
$totalcust=mysqli_num_rows($query1);
?>
            <div class="stats-left ">
              <h5>Total</h5>
              <h4>Customer</h4>
            </div>
            <div>
              <label> <?php echo $totalcust;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>

          <div class="main">
            <?php $query2=mysqli_query($conn,"Select * from appointments_table");
$totalappointment=mysqli_num_rows($query2);
?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>Appointment</h4>
            </div>
            <div>
              <label> <?php echo $totalappointment;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>

          <div class="main">
            <?php $query2=mysqli_query($conn,"Select * from services_table");
$totalservice=mysqli_num_rows($query2);
?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>Service</h4>
            </div>
            <div>
              <label> <?php echo $totalservice;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html> 
