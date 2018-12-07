<?php
require_once 'connection.php';
if (!empty($_POST)) {
 
  $sql="SELECT * FROM admin WHERE username='".$_POST['username']."' && password='".$_POST['password']."'";
  $check=$conn->query($sql);
  if ($check->num_rows>0) {
    header("location:admin.html");
    }
   else{
        $message = "This is only for Employees .Outsiders NOT ALLOWED.";
        echo "<script type='text/javascript'>alert('$message');</script>";

   } 

  }
?>

<html>
  
<title>Login</title>
  
<head>
    
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
           
<li><a href="index.php">Home</a></li>
           
</div>
           
</li>   
        
</ul>
        
</div>
    
</div>
      
<body>
<h1>This is only for ADMIN</h1>
    
<div class="formbox">
      
<p style="font-size:26pt; font-family:Thoma; color:#00bfff;">Login</p>
      
<form  method="post">
        
<p>
<input type="text" id="username" name="username" placeholder="Username">
</p>
<p>
<input type="password" id="password" name="password" placeholder="Password">
</p>


<input type="submit" value="Sign in">
</form>
     

</div>

  

  
<div id="content_footer">
    
</div>
    
<div id="footer">
                   
</div>
  
</body>


</html>
