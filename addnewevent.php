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
    <h2 style="font-weight: bold; color: #688BE8;">EVENT</h2>
   <p style="font-weight: bold; color: #688BE8; font-size: 25px;">Add new event to HMT database</p>

    <form action="validation.php" method="post">

           
        <div class="form-group">
        <label>Event</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Event</option>
      <option value="Admin">Male</option>
      <option value="User">Female</option>
    </select>
      </div>


       <div class="form-group">
        <label>Title of Event</label>
      <input type="text" name="titleofevent" placeholder="Title of Event" class="form-control" required> 
      </div>



     <div class="form-group">
        <label>Event Comment</label>
      <input type="text" name="eventcomment" placeholder="Event Comment" class="form-control" required> 
      </div>

  <div class="form-group">
        <label>Event Start Date</label>
      <input type="text" name="eventstartdate" placeholder="Event Start Date" class="form-control" required> 
      </div>   



          <div class="form-group">
        <label>Event End Dtate</label>
      <input type="text" name="eventenddate" placeholder="Event End Date" class="form-control" required> 
      </div>

      <div class="form-group">
        <label>Event For</label>
      <select name="type" class="form-control" required>
      <option value="-1">Select Role</option>
      <option value="Admin">Male</option>
      <option value="User">Female</option>
    </select>
      </div>



    

        <div class="form-group">
        <label>&nbsp;</label>
      <input type="submit" name="submit" value="Add Event" class="btn btn-primary">
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