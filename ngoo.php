<?php
//include 'signcon.php';

?>




<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title> Ngo Sign up page</title>
</head>
<body>


<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title"> ngo sign up users</h3>
 </div>



  <div class="panel-body">
 <form method="post" action="" class="form-horizontal" role="form">
  

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label"> First Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name"
       placeholder="First Name" name="first_name">
    </div>
  </div>



  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name2"
       placeholder="Last Name" name="last_name">
    </div>
  </div>




  
<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Mobile No</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name"
       placeholder="Mobile No" name="mobile_no">
    </div>
  </div>



  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Secret Key</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name"
       placeholder="Secret key" name="key">
    </div>
  </div>


<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="name"
       placeholder="Password" name="password">
    </div>
  </div>



<div class="form-group">
    <label for="name" class="col-sm-2 control-label">Email ID</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="name"
       placeholder="Email ID" name="email">
    </div>
  </div>
    
  
  <button type="submit" name="submitb" class="btn btn-success btn-lg">Submit</button>
</form>
  </div>





  <div class="panel-footer" style="overflow:hidden;text-align:right;">
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
      <button type="button" class="btn btn-default btn-lg">Cancel</button>
    </div>
  </div>  
  </div>
</div>
</body>
</html>