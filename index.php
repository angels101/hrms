<?php

include 'config.php';
    // getting all values from the HTML form
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    {
    if(isset($_POST['first_name']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $department = $_POST['department'];
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $contact_no = $_POST['contact_no'];
    }

    
    // using sql to create a data entry query
    $sql = "INSERT INTO employees (first_name, last_name, department, user_name, user_password, confirm_password, email, contact_no)
     VALUES ('$first_name', '$last_name', '$department', '$user_name', '$user_password','$confirm_password', '$email', '$contact_no')";
  
    // send query to the database to add values and confirm if successful
    if ($con->query($sql) === TRUE )
    {
       header("location:login.php");
    }
  }
}
    // close connection
    mysqli_close($con);
?>
<!DOCTYPE html>

  <html lang="es" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/"></script>
<link href="https://css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
	<title>Fin HRMS</title>
</head>
<body>
<!-------------------------NAV BAR-------------------------------------------->

<nav class="myNav">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>




<!-------------------------------NAV BAR-------------------------------------->
  <div class="container">


    <form class="well form-horizontal" action="index.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Department / Office</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker">
      <option value="">Select your Department/Office</option>
      <option>Department of Engineering</option>
      <option>Department of Agriculture</option>
      <option >Accounting Office</option>
      <option >Tresurer's Office</option>
      <option >MPDC</option>
      <option >MCTC</option>
      <option >MCR</option>
      <option >Mayor's Office</option>
      <option >Tourism Office</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(+254)" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<!-- div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.<-----/div--->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
   <button type="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
<!-- /.container -->    

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/"></script>
<script src="scripts.js" type="text/javascript"></script>
</body>
</html>

