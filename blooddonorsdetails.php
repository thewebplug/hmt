<?php
include_once('doctorsval.php');
$query="select * from bloodonortable";
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
		<th colspan="19"><h2>Accountant Record</h2></th>
	</tr>
	<t>
		<th>Fullname</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Blood group</th>
		<th>Last Donation Date</th>
		
	</t>
	<?php
	while ($rows=mysql_fetch_assoc($result))
	 {
	?>
		<tr>
			<td><?php echo $rows['fullname']; ?></td>
			<td><?php echo $rows['gender']; ?></td>
			<td><?php echo $rows['age']; ?></td>
			<td><?php echo $rows['phone']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['bloodgroup']; ?></td>
			<td><?php echo $rows['lastdonationdate']; ?></td>
			
			
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





