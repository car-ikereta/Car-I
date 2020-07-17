<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con, 'car-i');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];



$cohb="insert into signup(firstname,lastname,email,password)values('$firstname','$lastname','$email','$password')";
mysqli_query($con,$cohb);
header('location: addnewcar.html');


?>

