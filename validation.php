

<?php

header('location:login.php');


$con=mysql_connect("localhost","root","");
if(!$con)
 {
	echo"Unable to establish connection ".mysql_error();
}

	$db=mysql_select_db("hmt",$con);

if(!$db)
{
	echo "Database not found ".mysql_error();
}
 
if(isset($_POST['submit'])){
$type=$_POST['type'];
$username=$_POST['username'];
$password=$_POST['pwd'];

$query="select * from login where username='$username' and password='$password' and types='$type'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result)){
	if($row['username']==$username && $row['password']==$password && $row['types']=='Admin'){
		header("Location: adminhome.html");
	}
	elseif($row['username']==$username && $row['password']==$password && $row['types']=='User') {
		header("Location: appointment.php");
	}else{
		echo "Incorrect details please login and try again";
	}
	
}
}
?>
