<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$name = $_POST['username'];
$email = $_POST['email'];
$cardno = $_POST['cardno'];
$type = $_POST['type'];

$s = " select * from hospitalnum where hospitalno = '$cardno'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into appointment(username , hospitalno , email) values ('$name' , '$cardno' , '$email')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>


