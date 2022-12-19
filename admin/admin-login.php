<?php 
include'config.php';
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	

	<link rel="stylesheet" type="text/css" href="css.css">
	
</head>
<body>
			
			<div class="container">
				<div class="myform">
					
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
				<h2>ADMIN LOGIN</h2>
				<input type="text" placeholder="Admin name" name="AdminName">
				<input type="text" placeholder="Password" name="AdminPass">
				<button type="submit" name="Login">LOGIN</button>
			</form>
		</div>
		<div class="image">
			<img src="admin.jpg" width="300px">
		</div>
	</div>
<?php

function input_filter($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

if(isset($_POST['Login'])){
	//filtering user input data
	$AdminName = input_filter($_POST['AdminName']);
	$AdminPass = input_filter($_POST['AdminPass']);


	//escaping special symbols used in SQL statement
	$AdminName=mysqli_real_escape_string($conn, $AdminName);
	$AdminPass=mysqli_real_escape_string($conn, $AdminPass);


	//query template
	$query= "SELECT * FROM `admins_table` WHERE 'Admin_Name'=? AND 'Admin_Pass'=?";

	//prepared statement
	if($stmt=mysqli_prepare($conn, $query))
	{
		mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass); //binding value to templates
		mysqli_stmt_execute($stmt);//executing prepared statement
		mysqli_stmt_store_result($stmt);//transfering the result of execution in $stmt
		if(mysqli_stmt_num_rows($stmt)==0)
		{
			//echo "details matched";
			session_start();
			$_SESSION['AdminLoginId']=$AdminName;
			header("location:dash.php");
		}
		else{
			echo "<script>alert('invalid admin name and password');</script>";
		}
		mysqli_stmt_close($stmt);

	}
	else{
		echo "<script>alert('SQL query cannot be prepared');</script>";
	}
	
}?>
</body>
</html>
