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
    <h2  style="font-weight: bold; color: #688BE8;">BLOOD GROUP</h2>
    <p style="font-weight: bold; color: #688BE8; font-size: 25px;">INSERT BLOOD GROUP DATA INTO THE HMT DATABASE</p>

    <form action="bloodgroupval.php" method="post">

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
        <label>No. Of Bags</label>
      <input type="text" name="nobags" placeholder="No. Of Bags" class="form-control" required"> 
      </div>


           
           
           
      <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submi" value="ADD" class="btn btn-primary">
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