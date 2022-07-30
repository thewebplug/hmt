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
		<input type="text" name="patientregnum" placeholder="Enter new Patient Reg NUmber"><br>

      <select name="patientstatus" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Select Patient Status</option>
      <option value="Admit">Admit</option>
      <option value="Under Treatment">Under Treatment</option>
	  </select><br>
		
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

     <select name="doctor" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Select Doctor</option>
      <option value="Dr Umar">Dr Umar</option>
      <option value="Dr Abdul">Dr Abdul</option>
      <option value="Dr Saleem">Dr Saleem</option>
      <option value="Dr Hasna">Dr Hasna</option>
      </select><br>

      <select name="bedcategory" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Select Bed Category</option>
      <option value="Test1">Test1</option>
      <option value="Test2">Test2</option>
      <option value="Test3">Test3</option>      
      </select><br>		

     <select name="bednumber" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Select Bed Number</option>
      <option value="001">001</option>
      <option value="002">002</option>
      <option value="003">003</option>
      <option value="004">004</option>
      <option value="005">005</option>
      </select><br>

	 <input type="text" name="operationdate" placeholder="Enter new operationdate"><br>
		
	 <input type="text" name="operationtime" placeholder="Enter new Operation Time"><br>
		
	 <input type="text" name="description" placeholder="Enter new Description"><br>
		
	 <input type="text" name="operationcharge" placeholder="Enter new Operation Charge"><br>
							
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
	$id = $_POST['patientregnum'];

	$query = "UPDATE `operationtable` SET patientstatus='$_POST[patientstatus]',bloodgroup='$_POST[bloodgroup]',doctor='$_POST[doctor]',bedcategory='$_POST[bedcategory]',bednumber='$_POST[bednumber]',operationdate='$_POST[operationdate]',operationtime='$_POST[operationtime]',description='$_POST[description]',operationcharge='$_POST[operationcharge]' where patientregnum='$_POST[patientregnum]' ";
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