<?php

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hmt');
$regnum = $_POST['regnumber'];
$ambulanceidnum = $_POST['ambulanceid'];


$s = " select * from ambulanceregnum where regnum = '$regnum'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 0) {
	$reg= " insert into ambulanceregnum (regnum , id) value ('$regnum' , '$ambulanceidnum')";
	mysqli_query($con, $reg);
	header("Location: succapp.html");
}else{
	header("Location: failedapp.html");

}


	
?>


