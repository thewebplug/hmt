<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$name = $_POST['fullname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$bg = $_POST['bloodgroup'];
$lastdonation = $_POST['lastdonationdate'];


$s = " select * from bloodonortable where fullname = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into bloodonortable(fullname , gender , age , phone , email , bloodgroup , lastdonationdate) values ('$name' , '$gender' , '$age' , '$phone' , '$email' , '$bg' , '$lastdonation')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

