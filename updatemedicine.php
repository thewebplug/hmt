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
		<input type="text" name="medicinename" placeholder="Enter new Medicine Name"><br>

     
     <select name="category" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Select Category</option>
      <option value="Heart">Heart</option>
      <option value="ENT">ENT</option>
      </select><br>	

	 <input type="text" name="price" placeholder="Enter new Price"><br>

	 <input type="text" name="companyname" placeholder="Enter new Company Name"><br>


 	<input type="text" name="description" placeholder="Enter new Description"><br>

     <select name="stockstatus" class="form-control" required style="width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
	    padding: 8px 15px 8px 15px;
	    margin: 10px 0px 15px 0px;
	    box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Stock Status</option>
      <option value="IN">IN</option>
      <option value="OUT">OUT</option>
      </select><br>	

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
	$id = $_POST['medicinename'];

	$query = "UPDATE `medicinetable` SET category='$_POST[category]',price='$_POST[price]',companyname='$_POST[companyname]',description='$_POST[description]',stockstatus='$_POST[stockstatus]' where medicinename='$_POST[medicinename]' ";
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