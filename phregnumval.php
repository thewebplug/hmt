<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['phregnumber'];



$s = " select * from phregnum where regnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into phregnum(regnum) values ('$regnum')";
	mysqli_query($con, $reg);
	header("Location: addnewdoctor.php");
}else{
	header("Location: failedapp.html");

}


	
?>

