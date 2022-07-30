<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$dob = $_POST['dob'];
$homeadress = $_POST['adress'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pwd'];
$regnum = $_POST['nurseregnumber'];


$s = " select * from nurseregtable where nurseregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into addnursetable(firstname , lastname , middlename , nurseregnum , dob , homeadress , city , state , country , mobilenumber , email , username , password) values ('$firstname' , '$lastname' , '$middlename' , '$regnum' , '$dob' , '$homeadress' , '$city' , '$state' , '$country' , '$mobilenumber' , '$email' , '$username' , '$password')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>

