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
		<input type="text" name="id" placeholder="Enter new ID"><br>

     
	 <input type="text" name="patientregnum" placeholder="Enter new Patient Registration Number"><br>
		
	 <input type="text" name="homeaddress" placeholder="Enter new Home Address"><br>

	 <input type="text" name="charges" placeholder="Enter new Charges"><br>


 	<input type="text" name="requestdate" placeholder="Enter new Request Date"><br>

	 <input type="text" name="requesttime" placeholder="Enter new Request Time"><br>

	 <input type="text" name="dispatch" placeholder="Enter new Dispatch Time"><br>
						
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
	$id = $_POST['id'];

	$query = "UPDATE `ambulancereqtb` SET patientregnum='$_POST[patientregnum]',homeaddress='$_POST[homeaddress]',charges='$_POST[charges]',requestdate='$_POST[requestdate]',requesttime='$_POST[requesttime]',dispatch='$_POST[dispatch]' where id='$_POST[id]' ";
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