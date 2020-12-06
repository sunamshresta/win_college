<?php 
include 'emailConfig/auth_login.php';
// session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WIN College | Login</title>
  <link rel="shortcut icon" href="favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="shortcut icon" href="favicon.png">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Login</h3>
        <?php 
        if (!empty($_SESSION['error_message'])) {
          $errors = [$_SESSION['error_message']];
        }
        
        if (count($errors) > 0 AND !empty($_SESSION['error_message'])): ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
            <li>
              <?php echo $error; ?>
            </li>
            <?php endforeach;?>
          </div>
        <?php endif;?>
        <?php unset($_SESSION['error_message']); ?>

        <?php if (!empty($_SESSION['success_message'])) { ?>
          <div class="alert alert-success">
            <li>
              <?php echo $_SESSION['success_message']; ?>
            </li>
          </div>
        <?php 
          }
          unset($_SESSION['success_message']);
           ?>
        <form action="login.php" method="post">
          <div class="form-group">
            <label>Username or Email</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
          </div>
        </form>
        <p>Don't yet have an account? <a href="register.php">Register Here</a></p>
      </div>
    </div>
  </div>
</body>
</html>