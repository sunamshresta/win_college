<?php 
  session_start();
  $page='course';
  // redirect user to login page if they're not logged in | unverified | not admin type | cookie expired 
  require 'includes/redirect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WIN College | Admin</title>
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
              <h2 class="no-margin-bottom">Course</h2>
            </div>
          </header>

          <?php
          include '../includes/error.php';
          require '../Auth/connection.php';
          $courseId = $_GET['id'];

          $query = "SELECT c.* FROM courses as c WHERE c.Course_ID=$courseId";

          $result=mysqli_query($conn,$query);
          $course= mysqli_fetch_assoc($result);
          
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
                          <a href="admin_edit.php?id='<?php echo $course["id"]; ?>'" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Course <em>[Detail]</em></h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 offset-3">
                          <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              <strong>Course Name</strong>
                              <span class=""><?php echo $course['Course_Name']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              <strong>VET Qual</strong>
                              <span class=""><?php echo $course['VET_Qual']; ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              <strong>Cricos Qual</strong>
                              <span class=""><?php echo $course['Cricos_Qual']; ?></span>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-12 mt-2">
                          <div class="table-responsive">                       
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Subject Name</th>
                                  <th>Code</th>
                                  <th>Term</th> 
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $query = "SELECT s.* FROM subjects as s WHERE s.Course_ID=$courseId";

                                  $result=mysqli_query($conn,$query);
                                  // $course= mysqli_fetch_assoc($result);
                                  $i=0; 
                                  while ($subject=mysqli_fetch_assoc($result)) { 
                            ?>
                                
                                <tr>
                                  <th scope="row"><?php echo ++$i; ?></th>
                                  <td><?php echo $subject['UOC_Name']; ?></td>
                                  <td><?php echo $subject['UOC_Code']; ?></td>
                                  <td><?php echo $subject['Term']; ?></td>
                                </tr>
                                <?php ; } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>

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