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
    <h2>Login Here</h2>
    <p style="font-weight: bold;">Please login with the username and password given to you on registration at the hospital</p>

    <form action="dischargepatientval.php" method="post">


        <div class="form-group">
        <label>Patient Hospital No.</label>
      <input type="text" name="patientno" placeholder="Patient Hospital No." class="form-control" required> 
      </div> 
     


        <div class="form-group">
        <label>Discharge Date</label>
      <input type="text" name="dischargedate" placeholder="Discharge Date" class="form-control" required> 
      </div>     

      <div class="form-group">
        <label>Discharge Time</label>
      <input type="text" name="dischargetime" placeholder="Discharge Time" class="form-control" required> 
      </div>

       

          <div class="form-group">
        <label>Assigned Doctor </label>
      <select name="assigneddoc" class="form-control" required>
      <option value="-1">Assigned Doctor</option>
      <option value="Dr Umar">Dr Umar</option>
      <option value="Dr Abdul">Dr Abdul</option>
      <option value="Dr Saleem">Dr Saleem</option>
      <option value="Dr Hasna">Dr Hasna</option>


    </select>
      </div>


        <div class="form-group">
        <label>Note</label>
      <input type="text" name="note" placeholder="Doctors Note" class="form-control" required style="height: 90px;"> 
      </div>

      
      



        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="admit" value="ADMIT" class="btn btn-primary">
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