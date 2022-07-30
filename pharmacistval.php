<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$pharmregnum = $_POST['phregnumber'];
$dob = $_POST['dob'];
$homeadress = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pwd'];
$regnum = $_POST['phregnumber'];


$s = " select * from phregnum where regnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into pharmacisttable(firstname , lastname , middlename , pharmregnum , dob , homeadress , city , state , country , mobilenumber , email , username , password) values ('$firstname' , '$lastname' , '$middlename' , '$pharmregnum' , '$dob' , '$homeadress' , '$city' , '$state' , '$country' , '$mobilenumber' , '$email' , '$username' , '$password')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

