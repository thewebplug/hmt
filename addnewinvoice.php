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
<body style=" background: url(img/wp1966935.jpg) no-repeat 50% 50%;
  background-size: cover;
  background-position: center;">

<div class="container">
  <div class="login-box">
<div class="row">
  <div class="col-md-12">
    <h2 style="font-weight: bold; color: #688BE8;">INVOICE</h2>
    <p style="font-weight: bold; color: #688BE8; font-size: 25px;">Insert Invoice To HMT database</p>

    <form action="invoiceval.php" method="post">

       
      <div class="form-group">
        <label>Invoice ID</label>
      <input type="text" name="invoiceid" placeholder="Invoice ID" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Invoice Title</label>
      <input type="text" name="invoicetitle" placeholder="Invoice Title" class="form-control" required> 
      </div>

       
     
        <div class="form-group">
        <label>Patient Hospital No.</label>
      <input type="text" name="patientno" placeholder="Patient Hospital No." class="form-control" required> 
      </div>   
       <div class="form-group">
        <label>Total Amount</label>
      <input type="text" name="totalamt" placeholder="Total Amount" class="form-control" required> 
      </div>



      <div class="form-group">
        <label>Vat Percentage</label>
      <input type="text" name="vatpercentage" placeholder="Vat Percentage" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Discount Amount</label>
      <input type="text" name="discountamount" placeholder="Discount Amount" class="form-control" required> 
      </div>

      

      <div class="form-group">
        <label>Status</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Status</option>
      <option value="Paid">Paid</option>
      <option value="Unpaid">Unpaid</option>
      

    </select>
      </div>





       <div class="form-group">
        <label>Date</label>
      <input type="text" name="date" placeholder="Date" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Create invoice Entry" class="btn btn-primary">
      </div>
      </form>
      </div>


     
    </form>
  </div>
</div>

  </div>

</div>












<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
</html>