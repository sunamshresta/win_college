<?php 
$page='course';
session_start();
// redirect user to login page if they're not logged in | unverified | not student type | cookie expired 
if ( (empty($_SESSION['id'])) || ($_SESSION['verified'] == 0) || ($_SESSION['type'] != 'student') || (empty($_COOKIE['user'])) ) {
    session_destroy();
    header('location: ../login.php');
}
  // include '../emailConfig/auth.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WIN College | Student-Portal | Courses</title>
    <link rel="shortcut icon" href="../favicon.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../admin/assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../admin/assets/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../admin/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../admin/assets/css/custom.css">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>WIN </span><strong> Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="../logout.php" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="../admin/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo strtoupper($_SESSION['username']); ?></h1>
              <p><?php echo $_SESSION['verified'] == 1 ? 'Verified' : 'Pending'; ?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <!-- <li class=""><a href="index.php"> <i class="icon-user"></i>Admin </a></li> -->
            <li class="<?php if($page=='profile'){ echo 'active'; } ?>"><a href="profile.php"> <i class="fa fa-users"></i>Profile </a></li>
            <li class="<?php if($page=='course'){ echo 'active'; } ?>"><a href="course.php"> <i class="fa fa-book"></i>Courses </a></li>
            
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
         <?php
         include '../Auth/connection.php';
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
          <footer class="main-footer no-padding-top">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>WIN College &copy; 2020</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="#" class="external">WIN College</a></p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../admin/assets/jquery.cookie/jquery.cookie.js"> </script>
    <!-- <script src="../admin/assets/chart.js/Chart.min.js"></script> -->
    <script src="../admin/assets/jquery-validation/jquery.validate.min.js"></script>
    <!-- <script src="../admin/assets/js/charts-home.js"></script> -->
    <!-- Main File-->
    <script src="../admin/assets/js/front.js"></script>
  </body>
</html>