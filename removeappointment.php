<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"hmt");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>One Percent</title>
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/fixed.css">
  <title></title>
</head> 
<body>
<style type="text/css">
	table{
		margin-top: 200px;
	}
</style>

<form name="forms" action="" method="post">
	<table align="center">
		<tr>
			<td>Enter ID</td>
			<td><input type="text" name="id"></td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="submit2" value="delete" class="btn btn-danger">
			</td>
		</tr>
	</table>	
</form>

<?php
if(isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from appointment where id='$_POST[id]'");
}
?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
</html>

