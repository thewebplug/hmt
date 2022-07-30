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
     <h2 style="font-weight: bold; color: #688BE8;">HMT DRIVER REGISTRATION</h2>
   <p style="font-weight: bold; color: #688BE8; font-size: 25px;">Insert the details of the new Driver you wish to register</p>

    <form action="driverval.php" method="post">

       
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
        <label>Driver Reg Number</label>
      <input type="text" name="driverregnumber" placeholder="Driver Reg Number" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Ambulance Assigned</label>
      <input type="text" name="vehicletype" placeholder="Vehicle Type-Vehicle ID Number" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Gender</label>
      <select name="gender" class="form-control" required>
      <option value="-1">Select Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
      </div>

       <div class="form-group">
        <label>Date Of Birth</label>
      <input type="text" name="dob" placeholder="Date Of Birth" class="form-control" required> 
      </div>

 <div class="form-group">
        <label>Blood Group</label>
      <select name="bloodgroup" class="form-control" required>
      <option value="-1">Select Blood Group</option>
       <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB+">AB+</option>
      <option value="O+">O+</option>
      <option value="A-">A-</option>
      <option value="B-">B-</option>
      <option value="AB-">AB-</option>
      <option value="O-">O-</option>


    </select>
      </div>




      
      <div class="form-group">
        <label>Home Address</label>
      <input type="text" name="address" placeholder="Home Address" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>City</label>
      <input type="text" name="city" placeholder="City" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>State</label>
      <input type="text" name="state" placeholder="State" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Country</label>
      <input type="text" name="country" placeholder="Country" class="form-control" required> 
      </div>


       <div class="form-group">
        <label>Mobile Number</label>
      <input type="text" name="mobilenumber" placeholder="Mobile Number" class="form-control" required> 
      </div>

       <div class="form-group">
        <label>Email</label>
      <input type="Email" name="email" placeholder="Email" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Username</label>
      <input type="text" name="username" placeholder="username" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Password</label>
      <input type="password" name="pwd" placeholder="password" class="form-control" required>
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