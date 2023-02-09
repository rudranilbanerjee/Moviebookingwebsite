<?php
 $con = mysqli_connect('sql306.epizy.com','epiz_33536511','VoBUxLPWkJDYed0');
 mysqli_select_db($con,'epiz_33536511_showpura');
 $phone_no=$_GET['phoneno'];
if(isset($_GET['phoneno']))
{
  $a="select phone_no from user where phone_no='$phone_no'";
  $result=mysqli_query($con,$a);
  $r=mysqli_num_rows($result);
} 
 if($r>0)
  {
   echo 1; 
  }
 else
  echo 0;

?>
