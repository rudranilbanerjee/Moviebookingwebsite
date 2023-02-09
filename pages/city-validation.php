<?php
$conn = mysqli_connect("sql306.epizy.com","epiz_33536511","VoBUxLPWkJDYed0","epiz_33536511_showpura") or die("connection Failed");
$search_term = $_GET['searchbox1'];
$sql = "select cities from cinema_hall WHERE cities LIKE '$search_term'";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed.");
$num=mysqli_num_rows($result);
if($num>0){
	echo 1;
}
else
{
    echo "<ul><li>city not found<li></ul>";
}
?>