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
    <h2 style="font-weight: bold; color: #688BE8;">AMBULANCE REQUEST</h2>
    <p style="font-weight: bold; color: #688BE8; font-size: 25px;">ADD AMBULANCE REQUEST TO THE HMT DATABASE</p>

    <form action="ambulancereqval.php" method="post">



<div class="form-group">
        <label>Ambulance ID</label>
      <input type="text" name="ambulanceid" placeholder="Ambulance ID" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Patient Hospital No.</label>
      <input type="text" name="patientno" placeholder="Patient Hospital No." class="form-control" required> 
      </div> 
     
     
      <div class="form-group">
        <label>Adress</label>
      <input type="text" name="address" placeholder="Adress" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Charges</label>
      <input type="text" name="charges" placeholder="Charges" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Request Date</label>
      <input type="text" name="requestdate" placeholder="Request Date" class="form-control" required> 
      </div>

       
       <div class="form-group">
        <label>Request Time</label>
      <input type="text" name="requesttime" placeholder="Request Time" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Dispatch Time</label>
      <input type="text" name="dispatchtime" placeholder="Dispatch Time" class="form-control" required> 
      </div>

     

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Add Ambulance Request" class="btn btn-primary">
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