<?php include 'Auth/auth_register.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WIN College | Register</title>
  <link rel="shortcut icon" href="favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- <style type="text/css">
    body{
      background-color: gray;
    }
  </style> -->
  <script src="assets/js/form_validate.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3 offset-md-5 col-xs-3 offset-xs-4 col-sm-3 offset-sm-4" >
        <img src="attachments/Win Logo Main High.jpg" alt="image" height="100">
      </div>
      <div class="col-md-6 offset-md-3 form-wrapper auth mt-0">
        <h3 class="text-center form-title">Registration</h3>
        <?php if (!empty($_SESSION['error_message'])) {
          $errors = [$_SESSION['error_message']];
        }
        
         if ($errors AND count($errors) > 0): ?>
            <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
              <li>
                <?php echo $error; ?>
              </li>
            <?php endforeach; ?>
            </div>

            <?php unset($_SESSION['error_message']);
            ?>
          <?php endif;?>

        
        <form action="register.php" method="post">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="fname" name="firstName" class="form-control form-control-lg"  required onkeyup="return validFirstname();">
            <span id="firstname_error"></span>
          </div>
          <div class="form-group">
            <label>Middle Name</label>
            <input type="text" id="mname" name="middleName" class="form-control form-control-lg" autofocus >
            <span id="middlename_error"></span>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="lname" name="lastName" class="form-control form-control-lg" required onkeyup="return validLastname();">
            <span id="lastname_error"></span>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="male" required>Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="female" required>Female
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="gender" value="other" required>Other
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>DOB</label>
            <input type="date" name="dob" class="form-control form-control-lg" required>
          </div>
          <div class="form-group">
            <label>Permanent Address</label>
            <input type="text" name="permanentAddress" class="form-control form-control-lg" required>
          </div>
          <div class="form-group">
            <label>Temporary Address</label>
            <input type="text" name="temporaryAddress" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="email" name="email" class="form-control form-control-lg" required onkeyup="return validEmail();">
            <span id="email_error"></span>
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="text" id="mobile" name="mobile" class="form-control form-control-lg" required onkeyup="return validMobile();">
            <span id="mobile_error"></span>
          </div>
          <div class="form-group">
            <label>Choose Course</label>
            <!-- <input type="text" name="temporaryAddress" class="form-control form-control-lg"> -->
            <?php 
              $course_query = "SELECT * FROM courses";
              $course_result = mysqli_query($conn, $course_query);
             ?>
            <select name="course" id="course" class="form-control form-control-md">
              <option value="">-Choose your course-</option>
              <?php while($course=mysqli_fetch_assoc($course_result)) { ?>
              <option name="course" value="<?php echo $course['Course_ID']; ?>"><?php echo $course['Course_Name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="username" name="username" class="form-control form-control-lg" required onkeyup="return validUsername();">
            <span id="username_error"></span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg" required onkeyup="return validPassword1();">
            <span id="password_error"></span>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control form-control-lg" required onkeyup="return validPassword2();">
            <span id="confirmPassword_error"></span>
          </div>
          <div class="form-group">
            <button type="submit" name="register-btn" class="btn btn-lg btn-block">Register</button>
          </div>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>