<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['patientno'];
$date = $_POST['admitdate'];
$time = $_POST['admittime'];
$assign = $_POST['assigndoc'];
$symptoms = $_POST['symptoms'];


$s = " select * from patientregtable where patientregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into admitpatienttb(patientregnum , admitdate , admittime , assigneddoctor , symptoms) values ('$regnum' , '$date' , '$time' , '$assign' , '$symptoms')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

