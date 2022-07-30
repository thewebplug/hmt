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
		<input type="text" name="firstname" placeholder="Enter new firstname"><br>

		<input type="text" name="lastname" placeholder="Enter new lastname"><br>
		
		<input type="text" name="middlename" placeholder="Enter new middlename"><br>		
		
		<input type="text" name="driverregno" placeholder="Enter new Driver Reg NUmber"><br>

		<input type="text" name="assignedvehicle" placeholder="Enter new Assigned Vehicle"><br>
		
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

		<input type="text" name="dateofbirth" placeholder="Enter new date of birth"><br>
		
		<select name="bloodgroup" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      	<option value="-1">Select Blood Group</option>
      	<option value="A+">A+</option>
      	<option value="B+">B+</option>
      	<option value="AB+">AB+</option>
      	<option value="O+">O+</option>
      	<option value="A-">A-</option>
      	<option value="B-">B-</option>
      	<option value="AB-">AB-</option>
      	<option value="O-">O-</option>
		</select><br>
		

		<input type="text" name="homeaddress" placeholder="Enter new homeaddress"><br>
		
		<input type="text" name="city" placeholder="Enter new city"><br>
		
		<input type="text" name="state" placeholder="Enter new state"><br>
		
		<input type="text" name="country" placeholder="Enter new country"><br>		
		
		<input type="text" name="mobileno" placeholder="Enter new mobileno"><br>
		
		<input type="email" name="email" placeholder="Enter new email"><br>
		
		<input type="text" name="username" placeholder="Enter new username"><br>		
		
		<input type="text" name="password" placeholder="Enter new password"><br>

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

	$query = "UPDATE `drivertable` SET lastname='$_POST[lastname]',middlename='$_POST[middlename]',driverregno='$_POST[driverregno]',assignedvehicle='$_POST[assignedvehicle]',gender='$_POST[gender]',dateofbirth='$_POST[dateofbirth]',bloodgroup='$_POST[bloodgroup]',homeaddress='$_POST[homeaddress]',city='$_POST[city]',state='$_POST[state]',country='$_POST[country]',mobileno='$_POST[mobileno]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]' where firstname='$_POST[firstname]' ";
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