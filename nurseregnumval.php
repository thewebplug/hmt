<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['nurseregnumber'];


$s = " select * from nurseregtable where nurseregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into nurseregtable ( nurseregnum ) value ('$regnum')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>


