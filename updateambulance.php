<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<style>
		body{
			background-color: whitesmoke;
		}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</head>
<body>
<center>
	<h1> Update Driver Data Into Database</h1>

	<form action="" method="POST">
		<input type="text" name="ambulanceid" placeholder="Enter new Ambulance ID"><br>

     
	 <input type="text" name="regnumber" placeholder="Enter new Registration Number"><br>
		
	 <input type="text" name="drivername" placeholder="Enter new Driver Name"><br>

	 <input type="text" name="driveraddress" placeholder="Enter new Driver Address"><br>


 	<input type="text" name="phonenumber" placeholder="Enter new Phone Number"><br>

	 <input type="text" name="description" placeholder="Enter new Description"><br>
		
	
							
	 <input type="submit" name="update" value="UPDATE DATA">
	</form>
</center>
</body>
</html>

<?php
$conncetion = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conncetion,'hmt');

if (isset($_POST['update'])) 
{
	$id = $_POST['ambulanceid'];

	$query = "UPDATE `addambulancetb` SET regnumber='$_POST[regnumber]',drivername='$_POST[drivername]',driveraddress='$_POST[driveraddress]',phonenumber='$_POST[phonenumber]',description='$_POST[description]' where ambulanceid='$_POST[ambulanceid]' ";
	$query_run = mysqli_query($conncetion,$query);

	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Updated") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
	}
}
?>