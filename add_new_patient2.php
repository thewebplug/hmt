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
    <h2>PATIENT REGISTRATION STEP2</h2>
    <p style="font-weight: bold;">Insert Patient registration details to HMT database</p>

    <form action="patientval2.php" method="post">

        <div class="form-group">
        <label>Gaurdian ID</label>
      <input type="text" name="gaurdianid" placeholder="Gaurdian ID" class="form-control" required> 
      </div>     

      <div class="form-group">
        <label>First Name</label>
      <input type="text" name="firstname" placeholder="First Name" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Last Name</label>
      <input type="text" name="lastname" placeholder="Last Name" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Middle Name</label>
      <input type="text" name="middlename" placeholder="Middle Name" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Gender</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Gender</option>
      <option value="Admin">Male</option>
      <option value="User">Female</option>
    </select>
      </div>

      
       <div class="form-group">
        <label>Home Town Adress</label>
      <input type="text" name="adress" placeholder="Home Town Adress" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>City </label>
      <input type="text" name="city" placeholder="City" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Mobile Number</label>
      <input type="text" name="mobilenumber" placeholder="Mobile Number" class="form-control" required> 
      </div>


      <div class="form-group">
        <label>Relationship with patient</label>
      <input type="text" name="gaurdianrelationship" placeholder="Relationship with patient" class="form-control" required> 
      </div>

     

        <div class="form-group">
        <label>Upload Image</label>
        <button class="btn btn-primary">Upload</button>    
          </div>


        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Register" class="btn btn-primary">
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