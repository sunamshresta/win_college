<?php 
  session_start();
  $page='student';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WIN College | Student</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <?php require 'includes/header.php'; ?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <?php require 'includes/sidebar.php'; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Student</h2>
            </div>
          </header>

          <?php
          include '../includes/error.php';
          require 'connection.php';
          $userId = $_GET['id'];

          $query = "SELECT u.id as id, u.username as username, u.verified as verified, d.first_name as firstname, d.middle_name as middlename, d.last_name as lastname, d.dob as dob, d.gender as gender, d.address1 as address1, d.address2 as address2, d.email as email, d.mobile as mobile  FROM users as u LEFT join student_details as d ON u.student_detail= d.id WHERE u.type='student'";

          $result=mysqli_query($conn,$query);
          $user= mysqli_fetch_assoc($result);
           ?>
          
           <section class="edit">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow">
                          <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Student <em>[Update]</em></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                         <form action="student_edit_action.php" method="post">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" name="firstName" class="form-control form-control-lg" value="<?php echo $user['firstname']; ?>" >
                            </div>
                            <div class="form-group">
                              <label>Middle Name</label>
                              <input type="text" name="middleName" class="form-control form-control-lg" value="<?php echo $user['middlename']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" name="lastName" class="form-control form-control-lg" value="<?php echo $user['lastname']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Gender</label>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="male" required <?php echo ($user['gender']=='male') ? 'checked' : ''; ?>>Male
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="female" required <?php echo ($user['gender']=='female') ? 'checked' : ''; ?>>Female
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender" value="other" required <?php echo ($user['gender']=='other') ? 'checked' : ''; ?>>Other
                                </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>DOB</label>
                              <input type="date" name="dob" class="form-control form-control-lg" value="<?php echo $user['dob']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Permanent Address</label>
                              <input type="text" name="permanentAddress" class="form-control form-control-lg" value="<?php echo $user['address1']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Temporary Address</label>
                              <input type="text" name="temporaryAddress" class="form-control form-control-lg" value="<?php echo $user['address2']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $user['email']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Mobile Number</label>
                              <input type="text" name="mobile" class="form-control form-control-lg" value="<?php echo $user['mobile']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control form-control-lg disabled" disabled="disabled" value="<?php echo $user['username']; ?>">
                            </div>

                            <input type="hidden" name="id" value="<?php echo $userId; ?>">
                            <div class="form-group">
                              <button type="submit" name="edit-btn" class="btn btn-lg btn-block btn-primary">Update</button>
                            </div>
                          </form>
                          <?php 

                          

                           ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <?php require 'includes/footer.php'; ?>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery.cookie/jquery.cookie.js"> </script>
    <!-- <script src="assets/chart.js/Chart.min.js"></script> -->
    <script src="assets/jquery-validation/jquery.validate.min.js"></script>
    <!-- <script src="assets/js/charts-home.js"></script> -->
    <!-- Main File-->
    <script src="assets/js/front.js"></script>
  </body>
</html>