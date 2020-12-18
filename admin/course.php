<?php 
  $page='course';
  session_start();
  // redirect user to login page if they're not logged in | unverified | not admin type | cookie expired 
  require 'includes/redirect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WIN College | Course</title>
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
          require '../includes/success.php';
          require '../includes/error.php';
          require '../Auth/connection.php';

          $query = "SELECT * FROM courses";

          $result=mysqli_query($conn,$query);
           ?>
          
           <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">

                        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow">
                          <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                          <a href="#" class="dropdown-item add"> <i class="fa fa-plus"></i>Add </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">List of Courses</h3>
                      
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>VET Qual</th>
                              <th>Cricos Qual</th>
                              <th>Duration</th>
                              <th>Year</th> 
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $i=0; 
                              while ($course=mysqli_fetch_assoc($result)) { 
                        ?>
                            
                            <tr>
                              <th scope="row"><?php echo ++$i; ?></th>
                              <td><?php echo $course['Course_Name']; ?></td>
                              <td><?php echo $course['VET_Qual']; ?></td>
                              <td><?php echo $course['Cricos_Qual']; ?></td>
                              <td><?php echo $course['Course_Duration']; ?></td>
                              <td><?php echo $course['Year']; ?></td>
                              <td>
                                <a class="fa fa-eye" href="course_detail.php?id='<?php echo $course["Course_ID"]; ?>'"> </a>
                                <!-- <a class="fa fa-edit btn btn-primary" href="admin_edit.php?id='<?php echo $course["id"]; ?>'"></a>
                                <a class="fa fa-trash btn btn-danger" href="admin_delete.php?id='<?php echo($course["id"]) ?>'" onclick="return confirm('Do you want to delete?')"></a> -->
                              </td>
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