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
        <label>Patient</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Patient</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>


       <div class="form-group">
        <label>Patient Status</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Patient Status</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>



       <div class="form-group">
        <label>Blood Group</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Blood Group</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>


       <div class="form-group">
        <label>Bed Type</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Bed Type</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>
      <option value="Admin">O+</option>

    </select>
      </div>

      <div class="form-group">
        <label>Allotment Date</label>
      <input type="text" name="allotmentdate" placeholder="Allotment Date" class="form-control" required"> 
      </div>


       <div class="form-group">
        <label>Discharge Date</label>
      <input type="text" name="dischargedate" placeholder="Discharge Date" class="form-control" required"> 
      </div>

         
        <div class="form-group">
        <label>Select Nurse</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Nurse</option>
      <option value="Admin">nurse</option>
      <option value="Admin">nurse</option>
      <option value="Admin">nurse</option>
      <option value="Admin">nurse</option>
      <option value="Admin">nurse</option>

    </select>
      </div>


       <div class="form-group">
        <label>Description</label>
      <input type="text" name="description" placeholder="Description" class="form-control" required"> 
      </div>

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
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