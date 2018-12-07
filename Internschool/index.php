<?php
require_once 'connection.php';



if (!$conn) {
    die('error');
}
else{
}
?>

<!DOCTYPE HTML>

<html>


<head>

<title>
Home
</title>

<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>


<body>

<div id="main">
    
<div id="header">
        
<div id="logo">
            
<div id="logo_text">
                
<h1>
<a href="index.html">InternSchool</a>
</h1>

               
<h2>
Choose the internship that fits you.
</h2>
            
</div>
        
</div>
        
<div id="menubar">
            
<ul id="menu">
           
<li><a href="index.html">Home</a></li>
           
<li><a href="about.html">About</a></li>
                  
<li><a href="login.php">login</a></li>

<li><a href="reg.php">register</a></li>            

<li><a href="contact.php">contact</a></li>                    
</div>
           
</li>   
        
</ul>
        
</div>
    
</div>
    
<div id="content_header">

</div>
    
<div id="site_content">
        
<div id="banner">

</div>
        
<div id="site_content">
            
<h1>
Welcome to the online Internship searching website
</h1>
        
</div>
                   
</div>
                

<center><style>
        .container{
            position:relative;
            width:75%;
            height:500px;
            border-radius:5px;
            border:1px solid red;
            overflow:hidden;
        }
    </style>
</head>
<body>
<div id="imgGallary" class="container">
    <img src="i1.jpg" alt="" width="100%" height="500" />
    <img src="i2.jpg" alt="" width="100%" height="500" />
    <img src="i3.jpg" alt="" width="100%" height="500" />
    <img src="i4.jpg" alt="" width="100%" height="500" />
</div>
<script>
(function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },4000);
        }
})();
</script></center>
<br>          
<div id="content_footer">
    
</div>
    
<div id="footer">
    <h1>
                    <a href="adminlogin.php">Admin<span class="logo_colour">Login</span></a>
    </h1>
                   
</div>
        
</div>

</div>

</body>


</html>