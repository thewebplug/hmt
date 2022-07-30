<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$ambulanceidnum = $_POST['ambulanceid'];


$s = " select * from ambulanceid where id = '$ambulanceidnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into ambulanceid (id) value ('$ambulanceidnum')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>


