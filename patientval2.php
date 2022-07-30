<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$id = $_POST['gaurdianid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$homeadress = $_POST['adress'];
$city = $_POST['city'];
$mobilenumber = $_POST['mobilenumber'];
$relation = $_POST['gaurdianrelationship'];


$s = " select * from patienttabletwo where gaurdianid = '$id'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into patienttabletwo(gaurdianid , firstname , lastname , middlename , homeadress , city , mobilenumber , relationshipwithpatient) values ('$id' , '$firstname' , '$lastname' , '$middlename' , '$homeadress' , '$city' , '$mobilenumber' , '$relation')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

