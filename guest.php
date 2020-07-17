<?php

session_start();

$con = mysqli_connect('localhost','root',);

mysqli_select_db($con,'car-i');

$income=$_POST['income'];


$cohb="insert into guest(income)values('$income')";
mysqli_query($con,$cohb);
header('location: findcar.html');


?>