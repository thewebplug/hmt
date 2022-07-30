<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$bagno = $_POST['nobags'];
$bg = $_POST['bloodgroup'];


$s = " select * from bloodgrouptable where bagno = '$bagno'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into bloodgrouptable(bagno , bloodgroup) values ('$bagno' , '$bg')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

