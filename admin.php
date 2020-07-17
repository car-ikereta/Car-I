<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con, 'car-i');

$username=$_POST['username'];
$password=$_POST['password'];


$cohb="insert into adminlogin(username,password)values('$username','$password')";
mysqli_query($con,$cohb);
header('location: adminchoose.html');


?>

