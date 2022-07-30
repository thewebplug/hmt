<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$date = $_POST['operationdate'];
$time = $_POST['operationtime'];
$description = $_POST['description'];
$charge = $_POST['operationcharge'];
$regnum = $_POST['patientno'];


$s = " select * from patientregtable where patientregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into operationtable(patientregnum , operationdate , operationtime , description , operationcharge) values ('$regnum' , '$date' , '$time' , '$description' , '$charge')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

