<?php include 'emailConfig/auth.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WIN Colleg | Login</title>
  <link rel="shortcut icon" href="favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth">
        <h3 class="text-center form-title">Register</h3>
        <?php if (!empty($_SESSION['error_message'])) {
          $errors = [$_SESSION['error_message']];
        } ?>
        <?php if (count($errors) > 0) ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
            <li>
              <?php echo $error; ?>
            </li>
            <?php 
              endforeach;
              unset($_SESSION['error_message']);
            ?>

          </div>
        
        <form action="register.php" method="post">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstName" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Middle Name</label>
            <input type="text" name="middleName" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastName" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" name="gender" value="male" class="form-control form-control-lg">
            <!-- Male -->
            <!-- <input type="radio" name="gender" value="female" class="form-control form-control-lg">Female -->
            <!-- <input type="radio" name="gender" value="other" class="form-control form-control-lg">Other -->
          </div>
          <div class="form-group">
            <label>DOB</label>
            <input type="date" name="dob" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" name="permanentAddress" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Temporary Address</label>
            <input type="text" name="temporaryAddress" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" name="mobile" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Password Confirm</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="register-btn" class="btn btn-lg btn-block">Sign Up</button>
          </div>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>