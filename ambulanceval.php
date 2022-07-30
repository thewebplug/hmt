<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$id = $_POST['ambulanceid'];
$regno = $_POST['regnumber'];
$drivername = $_POST['drivername'];
$address = $_POST['driveraddress'];
$phone = $_POST['driverphonenumber'];
$description = $_POST['description'];
$regnum = $_POST['regnumber'];


$s = " select * from ambulanceregnum where regnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into addambulancetb(ambulanceid , regnumber , drivername , driveraddress , phonenumber , description) values ('$id' , '$regno' , '$drivername' , '$address' , '$phone' , '$description')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

