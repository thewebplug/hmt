<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$id = $_POST['ambulanceid'];
$patientnum = $_POST['patientno'];
$homeaddress = $_POST['address'];
$charges = $_POST['charges'];
$requestdate = $_POST['requestdate'];
$requesttime = $_POST['requesttime'];
$dispatch = $_POST['dispatchtime'];
$regnum = $_POST['patientno'];


$s = " select * from patientregtable where patientregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into ambulancereqtb(id , patientregnum , homeaddress , charges , requestdate , requesttime , dispatch) values ('$id' , '$patientnum' , '$homeaddress' , '$charges' , '$requestdate' , '$requesttime' , '$dispatch')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

