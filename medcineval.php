<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$name = $_POST['medicinename'];
$price = $_POST['price'];
$companyname = $_POST['companyname'];
$description = $_POST['description'];


$s = " select * from medicinetable where medicinename = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into medicinetable(medicinename , price , companyname , description) values ('$name' , '$price' , '$companyname' , '$description')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

