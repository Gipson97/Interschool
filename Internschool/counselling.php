<?php
require_once 'connection.php';
if (!empty($_POST)) {
	
	$sql="SELECT * FROM counselling WHERE email='".$_POST['email']."'";
	
		

		if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			
		}
		else{
			die('invalid email');
		}
		$sql="INSERT INTO counselling( username, email, query ) VALUES('" .$_POST['username']. "','" .$_POST['email']. "','".$_POST['query']. "')";
		

		if ($conn->query($sql) === TRUE) {
			$message = "Thanks for the query. We will reply you in short time";
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
    
<title>Counselling</title>
 

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
           
<li><a href="showProfile.html">Back</a></li>
           

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
        
<h1>Counselling Form</h1>
<div class="formbox">
        
<table width="100%" cellpadding="1" cellspacing="1">
<tr>
<td width="600" valign="top">
<p><center><h5>If you have any questions please use the form below.</h5></center></p>
<form action= "counselling.php" method="POST">
<table width="500">
<tr>
<td height="38" valign="top">Username:</td><td><input type="text" size="90" name="username" /></td>
</tr>

<tr>
<td valign="top">E-mail</td><td><input type="email" size="90" name="email" /><br /><br /></td>
</tr>
<tr>
<td height="133" valign="top">Your Query:</td>
<td><textarea cols="70" rows="9" name="query"></textarea></td>
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
    
</div>

</div>

<div id="content_footer">
</div>

<div id="footer">
    

</div>

</body>

</html>
