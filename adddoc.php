<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$docregnumber = $_POST['docregnumber'];
$dob = $_POST['dob'];
$degree = $_POST['degree'];
$homeadress = $_POST['adress'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$username = $_POST['patientname'];
$password = $_POST['pwd'];
$regnum = $_POST['docregnumber'];


$s = " select * from docregnum where docregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into adddoc(firstname , lastname , middlename , docregnumber , dob , degree , homeadress , city , state , country , mobilenumber , email , username , password) values ('$firstname' , '$lastname' , '$middlename' , '$docregnumber' , '$dob' , '$degree' , '$homeadress' , '$city' , '$state' , '$country' , '$mobilenumber' , '$email' , '$username' , '$password')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

