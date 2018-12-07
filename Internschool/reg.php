<?php
require_once 'connection.php';
if (!empty($_POST)) {
	
	$sql="SELECT * FROM register WHERE password='".$_POST['password']."'";
	$check=$conn->query($sql);
	if ($check->num_rows>0) {
		
		$message = "Please Fill All The Details";
        echo "<script type='text/javascript'>alert('$message');</script>";

		}
	else{

		$first_name=filter_var($_POST['first_name'],FILTER_SANITIZE_STRING);
		$last_name=filter_var($_POST['last_name'],FILTER_SANITIZE_STRING);
		$password=filter_var($_POST['phone_no'],FILTER_SANITIZE_STRING);
		$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);

		if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			echo " ";
		}
		else{
			$message = "invalid email";
        echo "<script type='text/javascript'>alert('$message');</script>";

			die('invalid email');
		}
		$sql="INSERT INTO register( first, last, username, password, email, phone_no, DOB ) VALUES('" .$_POST['first_name']. "','" .$_POST['last_name']. "','".$_POST['username']. "','".$_POST['password']."','".$_POST['email']. "','".$_POST['phone_no']."','".$_POST['age']."')";
		

		if ($conn->query($sql) === TRUE) {
			$message = "we welcome our new customer.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			
            mysql_error();
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
    
<link href="pagestyle.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="pagestyle.css">

</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link rel="stylesheet" type="text/css" href="css/jquery-impromptu.css"/>

<div id="main">
    
<div id="header">
        
<div id="logo">
            
<div id="logo_text">
                
<h1>InternSchool</a>
</h1>

               
<h2>
Choose the internship that fits you.
</h2>
            
</div>
        
</div>
        
<div id="menubar">
            
<ul id="menu">

	<li><a href="index.php">Back</a></li>


           
</div>
           
</li>   
        
</ul>
        
</div>
    
</div>

<body>

<div class="formbox">
      
<center>
	<p style="font-size:26pt; font-family:Thoma; color:#00bfff;">Register</p>
      
	<form action="reg.php" method="POST">
	first name<input type="text" name="first_name">
	<br>
	last name<input type="text" name="last_name">
	<br>
	username<input type="text" name="username">
	<br>
	password<input type="password" name="password">
	<br>
	email<input type="email" name="email">
	<br>
	phone no<input type="number" name="phone_no">
	<br>
	Age<input type="number" name="age">
	<br>
	<input type="submit" value="Create Account">
</form></center>
</div>
<div id="content_footer">
    
</div>
    
<div id="footer">
                   
</div>
</body>
</html>