<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$id = $_POST['invoiceid'];
$title = $_POST['invoicetitle'];
$patientregnum = $_POST['patientno'];
$vat = $_POST['vatpercentage'];
$discount = $_POST['discountamount'];
$date = $_POST['date'];
$regnum = $_POST['patientno'];


$s = " select * from patientregtable where patientregnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$reg= " insert into invoicetable(invoiceid , invoicetitle , patientregnum , vatpercentage , discountamount , date) values ('$id' , '$title' , '$patientregnum' , '$vat' , '$discount' , '$date')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

