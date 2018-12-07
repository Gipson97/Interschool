<?php

$con=mysqli_connect('localhost','root','','intern');
if(!isset($_POST['submit']))
    $sql = " SELECT * FROM job WHERE category='Select' && location='Select'";
else
$sql = " SELECT * FROM job WHERE category='".$_POST['category']."' && location='".$_POST['location']."'";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));



?>

<!DOCTYPE HTML>
<html>

<head>
    <title>
        Find Internship
    </title>
    <link rel="popup" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery-impromptu.css"/>
    
</head>

<body>
<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <h1>
                    InternSchool
                </h1>

                <h2>
                    Choose the internship that fits you.
                </h2>
            </div>
        </div>
        <div id="menubar">
             <ul id="menu">
           <li><a href="index.php">Logout</a></li>
           <li><a href="showProfile.html">Back</a></li>   
        </ul>
        </div>
    </div>
    <div id="content_header">
    </div>
    <div id="site_content">
        <div id="content" style="width: 100%;">
            <h1>
                Find Internship
            </h1>

            <form class="form_search" method="post" action="#">
                <span> Category </span>
                <select name="category" id="category"s>
                    <option selected="true" value="Select" >Select</option>
                    <option value="Computer">Computer</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Marketing">Marketing</option>
                    
                </select>
                <span> Location </span>
                <select name="location" id="location">
                    <option selected="true" value="Select" >Select</option>
                    <option value="Navi Mumbai">Navi Mumbai</option>
                    <option value="South Mumbai">South Mumbai</option>
                    <option value="Mumbai Suburban">Mumbai Suburban</option>
                </select>
                <input class="submit" type="submit" id="submit" name="submit" value="Search"/>
            </form>
            <table id="table_jobs" style="width:100%; border-spacing:5px; padding-top: 30px; ">
                <tbody>
                <tr>
                    
                    <th style="width: 25%;"> Job Title</th>
                    <th style="width: 15%;"> Category</th>
                    <th style="width: 20%;"> Location</th>
                    <th style="width: 10%;"> Period</th>
                    <th style="width: 10%;"> Salary</th>
                    <th style="width: 8%;"> Apply #</th><br>
                    
                </tr>

                <tr>

                <?php

                   If(mysqli_num_rows($result)>0)
                   {
                     while($row=mysqli_fetch_array($result))
                     {  
                        echo "<tr>";
                ?>
                  <td><?php echo $row['job']; ?></td> 
                  <td><?php echo $row['category']; ?></td> 
                  <td><?php echo $row['location']; ?></td>
                  <td><?php echo $row['period']; ?></td>
                  <td><?php echo $row['salary']; ?></td>
                  <td><?php echo $row['apply']; ?><form method="POST"></form></td>
                <?php
                echo "</tr>";

                }
                }
                 ?>
                 






                </tr>
                </tbody>
            </table>
        </div>
    </div>



<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 20%;
    font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 100px;
    height:100px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
    display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow:;
    background-color: rgba(255,0,0,0.4);
}

/* The Close Button (x) */
.close {
    position:relative;
    left: 10px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}



</style>
</style>


<button onclick="document.getElementById('modal-wrapper').style.display='block' "style= width:200px; margin-top:200px; margin-left:160px;">Open Popup</button>


<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      
      <img src="1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Modal Popup Box</h1>
    </div>

    <div class="imgcontainer">
      <input type="text" placeholder="Enter Username" name="uname"><br>
      <input type="password" placeholder="Enter Password" name="psw"><br>        
      <button type="submit">Login</button>
      
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



    <div id="content_footer">
    </div>
    <div id="footer">
       
    </div>
</div>
</body>
</html>
