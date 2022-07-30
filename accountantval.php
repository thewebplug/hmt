<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$accregnum = $_POST['accregnumber'];
$dob = $_POST['dob'];
$homeaddress = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pwd'];
$regnum = $_POST['accregnumber'];


$s = " select * from accountantregtable where regnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into accountanttable(firstname , lastname , middlename , accregnumber , dob , homeaddress , city , state , country , mobilenumber , email , username , password) values ('$firstname' , '$lastname' , '$middlename' , '$accregnum' , '$dob' , '$homeaddress' , '$city' , '$state' , '$country' , '$mobilenumber' , '$email' , '$username' , '$password')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

