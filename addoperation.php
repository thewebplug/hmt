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
    <h2 style="font-weight: bold; color: #688BE8;">OPERATION</h2>
    <p style="font-weight: bold; color: #688BE8; font-size: 25px;">ADD NEW OPERATION TO THE HMT DATA BASE</p>

    <form action="operationval.php" method="post">

       

       <div class="form-group">
        <label>Patient Hospital No.</label>
      <input type="text" name="patientno" placeholder="Patient Hospital No." class="form-control" required> 
      </div>   


       <div class="form-group">
        <label>Patient Status</label>
      <select name="status" class="form-control" required>
      <option value="-1">Select Patient Status</option>
      <option value="Admit">Admit</option>
      <option value="Under Treatment">Under Treatment</option>
     

    </select>
      </div>


       <div class="form-group">
        <label>Blood Group</label>
      <select name="bloodgroup" class="form-control" required>
      <option value="-1">Select Blood Group</option>
      <option value="Admin">A+</option>
      <option value="Admin">B+</option>
      <option value="Admin">AB+</option>
      <option value="Admin">O+</option>
      <option value="Admin">A-</option>
      <option value="Admin">B-</option>
      <option value="Admin">AB-</option>
      <option value="Admin">O-</option>


    </select>
      </div>


            <div class="form-group">
        <label>Select Doctor</label>
      <select name="doctor" class="form-control" required>
      <option value="-1">Select Doctor</option>
      <option value="Admin">Dr Umar</option>
      <option value="User">Dr Abdul</option>
      <option value="User">Dr Saleem</option>
      <option value="User">Dr Hasna</option>


    </select>
      </div>

       <div class="form-group">
        <label>Bed Category</label>
      <select name="category" class="form-control" required>
      <option value="-1">Select Bed Category</option>
      <option value="Test1">Test1</option>
      <option value="Test2">Test2</option>
      <option value="Test3">Test3</option>
      

    </select>
      </div>



       <div class="form-group">
        <label>Bed Number</label>
      <select name="bednumber" class="form-control" required>
      <option value="-1">Select Bed Number</option>
      <option value="001">001</option>
      <option value="002">002</option>
      <option value="003">003</option>
      <option value="004">004</option>
      <option value="005">005</option>

    </select>
      </div>


      <div class="form-group">
        <label>Operation Date</label>
      <input type="text" name="operationdate" placeholder="Operation Date" class="form-control" required> 
      </div>



      <div class="form-group">
        <label>Operation Time</label>
      <input type="text" name="operationtime" placeholder="Operation Time" class="form-control" required> 
      </div>


       <div class="form-group">
        <label>Description</label>
      <input type="text" name="description" placeholder="Description" class="form-control" required style="height: 90px;"> 
      </div>


       <div class="form-group">
        <label>Operation Charge</label>
      <input type="text" name="operationcharge" placeholder="Operation Charge" class="form-control" required> 
      </div>


      

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Add Operation" class="btn btn-primary">
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