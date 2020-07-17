<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con, 'car-i');

$carmodel=$_POST['carmodel'];
$carbrand=$_POST['carbrand'];
$caprice=$_POST['carprice'];
$maintenance=$_POST['maintenance'];
$fuelcomp=$_POST['fuelcomp'];


$cohb="insert into addnewcar(carmodel,carbrand,carprice,maintenance,fuelcomp)values('$carmodel','$carbrand','$carprice','$maintenance','$fuelcomp')";
mysqli_query($con,$cohb);
header('location: addnewcar.html');


?>
