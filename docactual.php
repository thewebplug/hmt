<?php
include_once('doctorsval.php');
$query="select * from adddoc";
$result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>THE WEB PLUG</title>
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/fixed.css">

</head>
<body>
<table align="center" border="1px" style="width: 100%; line-height: 40px;">
	<tr>
		<th colspan="19"><h2>Doctor Record</h2></th>
	</tr>
	<t>
		<th>firstname</th>
		<th>lastname</th>
		<th>middlename</th>
		<th>docregnumber</th>
		<th>gender</th>
		<th>dob</th>
		<th>bloodgroup</th>
		<th>department</th>
		<th>specialization</th>
		<th>degree</th>
		<th>homeadress</th>
		<th>city</th>
		<th>state</th>
		<th>country</th>
		<th>mobilenumber</th>
		<th>email</th>
		<th>username</th>
		<th>password</th>
	</t>
	<?php
	while ($rows=mysql_fetch_assoc($result))
	 {
	?>
		<tr>
			<td><?php echo $rows['firstname']; ?></td>
			<td><?php echo $rows['lastname']; ?></td>
			<td><?php echo $rows['middlename']; ?></td>
			<td><?php echo $rows['docregnumber']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['dob']; ?></td>
			<td><?php echo $rows['bloodgroup']; ?></td>
			<td><?php echo $rows['department']; ?></td>
			<td><?php echo $rows['specialization']; ?></td>
			<td><?php echo $rows['degree']; ?></td>
			<td><?php echo $rows['homeadress']; ?></td>
			<td><?php echo $rows['city']; ?></td>
			<td><?php echo $rows['state']; ?></td>
			<td><?php echo $rows['country']; ?></td>
			<td><?php echo $rows['mobilenumber']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
		</tr>
<?php	
	}
?>
</table>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>


</body>
</html>