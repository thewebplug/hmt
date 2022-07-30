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
    <input type="text" name="invoiceid" placeholder="Enter new Invoice ID"><br>
    
   <input type="text" name="invoicetitle" placeholder="Enter new Invoice Title"><br>

   <input type="text" name="patientregnum" placeholder="Enter new Patient Reg Number"><br>


  <input type="text" name="vatpercentage" placeholder="Enter VAT Percentage"><br>

  <input type="text" name="discountamount" placeholder="Enter Discount Amount"><br>

     <select name="status" class="form-control" required style="width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
      padding: 8px 15px 8px 15px;
      margin: 10px 0px 15px 0px;
      box-shadow: 1px 1px 2px 1px grey;">
      <option value="-1">Status</option>
      <option value="Paid">Paid</option>
      <option value="Unpaid">Unpaid</option>
      </select><br> 

      <input type="text" name="date" placeholder="Enter Date"><br>

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
  $id = $_POST['invoiceid'];

  $query = "UPDATE `invoicetable` SET invoicetitle='$_POST[invoicetitle]',patientregnum='$_POST[patientregnum]',vatpercentage='$_POST[vatpercentage]',discountamount='$_POST[discountamount]',status='$_POST[status]',date='$_POST[date]' where invoiceid='$_POST[invoiceid]' ";
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