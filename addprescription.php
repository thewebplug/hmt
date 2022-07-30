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

    <form action="validation.php" method="post">


  <div class="form-group">
        <label>Patient Hospital No.</label>
      <input type="text" name="patientno" placeholder="Patient Hospital No." class="form-control" required> 
      </div>   


      <div class="form-group">
        <label>Treatment</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Treatment</option>
      <option value="Heart Bypass">Heart Bypass</option>
     
    </select>
      </div>

      <div class="form-group">
        <label>Case History</label>
      <input type="text" name="casehistory" placeholder="Case History" class="form-control" required style="height: 90px;" "> 
      </div>


      <div class="form-group">
        <label>Medication</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Medcine</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>



      <div class="form-group">
      <select name="type" class="form-control" required>
      <option value="-1">Time AS Day</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>


        <div class="form-group">
      <input type="text" name="treatmentprice" placeholder="Total days" class="form-control" required> 
      </div>



        <div class="form-group">
        <label>&nbsp;</label>
      <input type="delete" name="delete" value="Delete" class="btn btn-primary">
      </div>


        <div class="form-group">
        <label>Note</label>
      <input type="text" name="treatmentprice" placeholder="Note" class="form-control" required style="height: 90px;"> 
      </div>


        <div class="form-group">
        <label>Custom Feild</label>
      <input type="text" name="feildlabel" placeholder="Feild Label" class="form-control" required> 
      </div>


        <div class="form-group">
      <input type="text" name="feildvalue" placeholder="Feild Value" class="form-control" required> 
      </div>



        <div class="form-group">
        <label>Treatment Price</label>
      <input type="text" name="treatmentprice" placeholder="Treatment Price" class="form-control" required> 
      </div>


       <div class="form-group">
        <label>&nbsp;</label>
      <input type="delete" name="delete" value="Delete" class="btn btn-primary" style="width: 80px;">
      </div>

       <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="addfield" value="Add More Field" class="btn btn-primary">
      </div>
      </form>
      </div>
       

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="CREATE PRESCRIPTION" class="btn btn-primary">
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