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
    <h2 style="font-weight: bold; color: #688BE8;">BLOOOD DONOR</h2>
     <p style="font-weight: bold; color: #688BE8; font-size: 25px;">Insert Blood Donor details to HMT database</p>

    <form action="blooddonorval.php" method="post">

       
      <div class="form-group">
        <label>Full Name</label>
      <input type="text" name="fullname" placeholder="Full Name" class="form-control" required> 
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
        <label>Age</label>
      <input type="text" name="age" placeholder="Age" class="form-control" required> 
      </div>

        <div class="form-group">
        <label>Phone</label>
      <input type="text" name="phone" placeholder="Phone" class="form-control" required> 
      </div>

       
       <div class="form-group">
        <label>Email</label>
      <input type="email" name="email" placeholder="Email" class="form-control" required> 
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
        <label>Last Donation Date</label>
      <input type="text" name="lastdonationdate" placeholder="Last Donation Date" class="form-control" required> 
      </div>

     
        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Add Donor" class="btn btn-primary">
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