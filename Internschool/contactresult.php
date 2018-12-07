<?php

$con=mysqli_connect('localhost','root','','intern');

$sql = " SELECT * FROM contact ";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

?>




<!DOCTYPE HTML>
<html>



<head>
    <title>
        Feedback
    </title>
   
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
           
           <li><a href="admin.html">Back</a></li>   
        </ul>
        </div>
    </div>
    <div id="content_header">
    </div>
    <div id="site_content">
        <div id="content" style="width: 100%;">
            

            
            <table id="table_jobs" style="width:100%; border-spacing:0; padding-top: 20px;">
                <tbody>
                <tr>
                    
                    <th style="width: 20%;"> Name</th>
                    <th style="width: 20%;"> E-mail</th>
                    <th style="width: 20%;"> Topic</th>
                    <th style="width: 80%;"> Feedback</th>
                    
                    
                </tr>

                <tr>

                    <?php

                   If(mysqli_num_rows($result)>0)
                   {
                     while($row=mysqli_fetch_array($result))
                     {  
                    echo "<tr>";
                ?>
                  <td><?php echo $row['name']; ?></td><
                  <td><?php echo $row['email']; ?></td> 
                  <td><?php echo $row['topic']; ?></td>
                  <td><?php echo $row['comment']; ?></td>
                
                <?php
                  echo "</tr>";

                }
                }
                 ?>

                </tr><br>
                </tbody>
            </table>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div id="content_footer">
    </div>
    <div id="footer">
       
    </div>
</div>
</body>

</html>