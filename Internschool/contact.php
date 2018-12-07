<?php
require_once 'connection.php';
if (!empty($_POST)) {
	
	$sql="SELECT * FROM contact WHERE email='".$_POST['email']."'";
	
		

		if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			
		}
		else{
			die('invalid email');
		}
		$sql="INSERT INTO contact( name, topic, email, comment ) VALUES('" .$_POST['name']. "','" .$_POST['topic']. "','".$_POST['email']. "','".$_POST['comment']."')";
		

		if ($conn->query($sql) === TRUE) {
			$message = "Thanks for the feedback.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		else{
			mysql_error();
			echo "error";
		}
	
}
?>




<!DOCTYPE HTML>

<html>


<head>
    
<title>Contact</title>
 

<link rel="stylesheet" type="text/css" href="css/style.css"/>
    

</head>


<body>

<div id="main">
    
<div id="header">
        
<div id="logo">
            
<div id="logo_text">
                
<h1>
<a href="index.html">InternSchool</a></h1>

                
<h2>
Choose the internship that fits you.
</h2>
            
</div>
        
</div>
        
<div id="menubar">
            
<ul id="menu">
           
<li><a href="index.php">Home</a></li>
           

</div>
           
</li>   
        
</ul>
        
</div>
    
</div>
<br>
<br>
<br>
<br>
    
<div id="content_header"></div>
    
<div id="site_content">
        
<h1>Contact Form</h1>
<table width="100%" cellpadding="1" cellspacing="1">
<tr>
<td width="600" valign="top">
<p><center><h5>If you have any comments or questions please use the form below.</h5></center></p>
<form action= "contact.php" method="POST">
<table width="500">
<tr>
<td height="38" valign="top">Name:</td><td><input type="text" size="90" name="name" /></td>
</tr>
<tr>
<td height="42" valign="top">Topic</td><td><input type="text" size="90" name="topic" /></td>
</tr>
<tr>
<td valign="top">E-mail</td><td><input type="email" size="90" name="email" /><br /><br /></td>
</tr>
<tr>
<td height="133" valign="top">Comments:</td>
<td><textarea cols="70" rows="9" name="comment"></textarea></td>
</tr>
<tr>
<td height="76"></td>
<td><input type="submit" value="Send"/>
     <input type="reset" value="Reset"/></td>
</tr>
</table>
</form>
</td>

</tr>
</table>
    
</div>

</div>

<div id="content_footer">
</div>

<div id="footer">
    

</div>

</body>

</html>
