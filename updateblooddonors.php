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
		<input type="text" name="fullname" placeholder="Enter new full Name"><br>
			
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

		<input type="text" name="age" placeholder="Enter new age"><br>

		<input type="text" name="phone" placeholder="Enter new Phone"><br>

		<input type="email" name="email" placeholder="Enter new Email"><br>


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
		

		<input type="text" name="lastdonationdate" placeholder="Enter new Last Donation Date"><br>
		
		
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
	$id = $_POST['fullname'];

	$query = "UPDATE `bloodonortable` SET gender='$_POST[gender]',age='$_POST[age]',phone='$_POST[phone]',email='$_POST[email]',bloodgroup='$_POST[bloodgroup]',lastdonationdate='$_POST[lastdonationdate]' where fullname='$_POST[fullname]' ";
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