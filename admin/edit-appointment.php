
<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
  header("location:admin-login.php");
}
?>

<?php

include('config.php');

var_dump($_GET);
$aid=$_GET["aid"];

if(isset($_POST['submit']))
  {
    var_dump($_POST);
    $err=[];
    $aid = $_GET['aid'];
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $AptNumber=$_POST['AptNumber'];
    //$AptDate=$_POST['AptDate'];
   //$AptTime=$_POST['AptTime'];
  
   //$Remark=$_POST['Remark'];
   
    if (count($err)==0) {
    
    $sql= "UPDATE  appointments_table SET Name='$Name', Email='$Email', PhoneNumber='$PhoneNumber', AptNumber='$AptNumber'  where aid=$aid ";
    // echo "$sql";?
    if ($conn->query($sql)) {
      $msg="update";
      echo 'ok';
      }else{
        die("failed $conn->error");
      }  
    header('location:appointment-list.php');
  
}
}
   
     ?>
     
    
 //$query->execute();
         // $aid = $conn->insert_id;
          //foreach($services as $id){
          //echo  $sql = "INSERT INTO `appointments_services` ( `aid`, `sid`) VALUES ($aid,$id)";
            //  $conn->query($sql);
            // }
            // $success =  ' successfully....';
         
    header('location:appointment-list.php');
  
}
   
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
    <h1>Admin panel <?php echo $_SESSION['AdminLoginId']?></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <button type="submit" name="Logout">LOGOUT</button>     
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

<div class="sidenav">
  
  
  <button class="dropdown-btn">Customer 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="customer.php">Add Customer</a>
    <a href="edit-customer.php">Edit Customer</a>
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

<div class="main">
  <h2>Edit appointment</h2>
  
</div>

 <?php $query=mysqli_query($conn,"select * from appointments_table where aid='$aid';");
  while($row=mysqli_fetch_array($query))
                            {
                            ?>
<center>
 
                <form action="#" method="post" >
                  
                    
                      <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Name" name="Name" required="true" value="<?php echo $row['Name'];?>">
                      </div>
                      <br>
                    
                  
                      <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="appointment_email" placeholder="Email" name="Email" required="true" value="<?php echo $row['Email'];?>">
                      </div>
                      <br>
                      <div class="input-group">
                        <label for="phone">Phone</label>
                        <input type="text"  id="phone" name="PhoneNumber" placeholder="Phone" required="true" maxlength="10" pattern="[0-9]+" value="<?php echo $row['PhoneNumber'];?>">
                      </div>
                      <br>
                      <div class="input-group">
                        <label for="aptnumber">AptNumber</label>
                        <input type="text" id="appointment_email" placeholder="AptNumber" name="AptNumber" required="true" value="<?php echo $row['AptNumber'];?>">
                      </div>
                      <br>
                    
                    <?php }?>
                      <div class="input-group">
                     <label for="services">services</label>
                         
                         <select name="services[]" id="services" multiple="true" style="height: 100px">
                            <option value="">Select Services</option>
                                <?php $query=mysqli_query($conn,"select * from services_table");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                           <option value="<?php echo $row['sid'];?>"><?php echo $row['ServiceName'];?></option>
                           <?php } ?> 
                          </select>
                 
                          </select>
                        </div>
                        <br>
                  
                  <div class="input-group">
                    <input type="submit" name="submit" value="Make an Appointment" class="btn">
                  </div>
                </form>
</center>

  <script >   
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
</body>
</html>


