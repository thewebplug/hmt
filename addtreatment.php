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
  <h2 style="font-weight: bold; color: #688BE8;">TREATMENT</h2>
   <p style="font-weight: bold; color: #688BE8; font-size: 25px;">Add new Treatment to HMT database</p>

    <form action="validation.php" method="post">

       
      <div class="form-group">
        <label>Treatment Name</label>
      <input type="text" name="treatmentname" placeholder="Treatment Name" class="form-control" required"> 
      </div>

        <div class="form-group">
        <label>Treatment Price</label>
      <input type="text" name="treatmentprice" placeholder="Treatment Price" class="form-control" required> 
      </div>

       

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="ADD TREATMENT" class="btn btn-primary">
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