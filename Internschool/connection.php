<?php


$servername="localhost";
$username="root";
$password="";
$dbname="intern";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
	die('error');
}
else{
	echo " ";
}