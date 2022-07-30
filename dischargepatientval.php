<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['patientno'];
$date = $_POST['dischargedate'];
$time = $_POST['dischargetime'];
$assigned = $_POST['assigneddoc'];
$note = $_POST['note'];



$s = " select * from patientregtable where patientregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into dischargepatienttable(patientregnum , dischargedate , dischargetime, assigneddoc , note) values ('$regnum' , '$date' , '$time' , '$assigned' , '$note')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

