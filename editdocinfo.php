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
	<h1>	Update Doctor Data Into Database</h1>

	<form action="" method="POST">
		<input type="text" name="firstname" placeholder="Enter new firstname"><br>

		<input type="text" name="lastname" placeholder="Enter new lastname"><br>
		
		<input type="text" name="middlename" placeholder="Enter new middlename"><br>		
		
		<input type="text" name="docregnumber" placeholder="Enter new DocRegNumber"><br>
		
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

		<input type="text" name="dob" placeholder="Enter new date of birth"><br>
		
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

		<select name="department" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      	<option value="-1">Select Department</option>
      	<option value="Heart">Heart</option>
      	<option value="ENT">ENT</option>
  		</select><br>

		<input type="text" name="specialization" placeholder="Enter new specialization"><br>


  		<input type="text" name="degree" placeholder="Enter New Degree"><br>
		
		<input type="text" name="homeadress" placeholder="Enter new homeadress"><br>
		
		<input type="text" name="city" placeholder="Enter new city"><br>
		
		<input type="text" name="state" placeholder="Enter new state"><br>
		
		<input type="text" name="country" placeholder="Enter new country"><br>		
		
		<input type="text" name="mobilenumber" placeholder="Enter new mobilenumber"><br>
		
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

	$query = "UPDATE `adddoc` SET lastname='$_POST[lastname]',middlename='$_POST[middlename]',docregnumber='$_POST[docregnumber]',gender='$_POST[gender]',dob='$_POST[dob]',bloodgroup='$_POST[bloodgroup]',department='$_POST[department]',specialization='$_POST[specialization]',degree='$_POST[degree]',homeadress='$_POST[homeadress]',city='$_POST[city]',state='$_POST[state]',country='$_POST[country]',mobilenumber='$_POST[mobilenumber]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]' where firstname='$_POST[firstname]' ";
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