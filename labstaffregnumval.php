<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['labstaffregnumber'];


$s = " select * from labstaffregnum where regnum = '$regnum'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into labstaffregnum ( regnum ) value ('$regnum')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>


