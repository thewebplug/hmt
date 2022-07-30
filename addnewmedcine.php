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
   <h2 style="font-weight: bold; color: #688BE8;">MEDCINE</h2>
    <p style="font-weight: bold;">Add new Medcine to the HMT database</p>

    <form action="medcineval.php" method="post">

       
      <div class="form-group">
        <label>Medcine Name</label>
      <input type="text" name="medicinename" placeholder="Medcine Name" class="form-control" required> 
      </div>

       

       <div class="form-group">
        <label>Category Name</label>
      <select name="category" class="form-control" required>
      <option value="-1">Select Category</option>
      <option value="Heartm">Heart</option>
      <option value="ENT">ENT</option>
    </select>
      </div>

       <div class="form-group">
        <label>Price</label>
      <input type="text" name="price" placeholder="Price" class="form-control" required> 
      </div>

 
       <div class="form-group">
        <label>Manufacturing Company Name</label>
      <input type="text" name="companyname" placeholder="Manufacturing Company Name" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Description</label>
      <input type="text" name="description" placeholder="Description" class="form-control" required style="height: 90px;"> 
      </div>

      <div class="form-group">
        <label>Stock Status</label>
      <select name="status" class="form-control" required>
      <option value="-1">Stock Status</option>
      <option value="Admin">IN</option>
      <option value="Admin">OUT</option>
     
    </select>
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