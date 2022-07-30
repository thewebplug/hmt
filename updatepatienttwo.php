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
	<h1>	Update Support Staff Data Into Database</h1>

	<form action="" method="POST">

		<input type="text" name="firstname" placeholder="Enter new firstname"><br>

		<input type="text" name="guardianid" placeholder="Enter new Guardian ID"><br>
		
		<input type="text" name="lastname" placeholder="Enter new lastname"><br>		
		
		<input type="text" name="middlename" placeholder="Enter new middlename"><br>
		
		<select name="gender" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      	<option value="-1">Select Gender</option>
      	<option value="Male">Male</option>
      	<option value="Female">Female</option>
    	</select><br>
		
		<input type="text" name="homeadress" placeholder="Enter new homeadress"><br>
		
		<input type="text" name="city" placeholder="Enter new city"><br>
		
		
		
		<input type="text" name="mobilenumber" placeholder="Enter new mobilenumber"><br>
		
		<input type="text" name="relationshipwithpatient" placeholder="Patient With Patient"><br>

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
	$id = $_POST['firstname'];

	$query = "UPDATE `patienttabletwo` SET guardianid='$_POST[guardianid]',lastname='$_POST[lastname]',middlename='$_POST[middlename]',gender='$_POST[gender]',homeadress='$_POST[homeadress]',city='$_POST[city]',mobilenumber='$_POST[mobilenumber]',relationshipwithpatient='$_POST[relationshipwithpatient]' where firstname='$_POST[firstname]' ";
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
?>iou;bilh