<?php
session_start();
$username=$_POST['username'];
$phone_no=$_POST['phone_no'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$con=mysqli_connect('sql306.epizy.com','epiz_33536511','VoBUxLPWkJDYed0');
mysqli_select_db($con,'epiz_33536511_showpura');
$q="insert into user (username,phone_no,email_id,password) values ('$username','$phone_no','$email_id','$password')";
$res=mysqli_query($con,$q);
echo $res;
$_SESSION['username']=$username;
header('location:http://showpura.infinityfreeapp.com/pages/Landing-Page.php');
?>