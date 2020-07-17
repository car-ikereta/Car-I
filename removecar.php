<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con, 'car-i');

$carmodel=$_POST['carmodel'];
$carbrand=$_POST['carbrand'];


$cohb="delete from addnewcar(carmodel,carbrand)values('$carmodel','$carbrand')";
mysqli_query($con,$cohb);
header('location: removecar.html');


?>