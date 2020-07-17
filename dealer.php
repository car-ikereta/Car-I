<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con, 'car-i');

$email=$_POST['email'];
$password=$_POST['password'];


$cohb="insert into dealerlogin(email,password)values('$email','$password')";
mysqli_query($con,$cohb);
header('location: addnewcar.html');


?>

