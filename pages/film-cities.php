<?php
$conn = mysqli_connect("sql306.epizy.com","epiz_33536511","VoBUxLPWkJDYed0","epiz_33536511_showpura") or die("connection Failed");
$search_term = $_GET['searchbox'];
$sql = "SELECT distinct(cities) FROM cinema_hall WHERE cities LIKE '%{$search_term}%'";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed.");
$output = "<ul>";
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$output .= "<li>{$row['cities']}<li>";
	}
}else{
	$output .= "<li>city not found.....<li>";
}
$output .= "</ul>";
echo $output;