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
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../assets/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../favicon.png">
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
                <!-- Navbar Brand --><a href="../index.php" class="navbar-brand d-none d-sm-inline-block">
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
            <div class="avatar"><img src="../img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo strtoupper($_SESSION['username']); ?></h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class=""><a href="index.php"> <i class="icon-user"></i>Admin </a></li>
            <li class="active"><a href="student.php"> <i class="fa fa-users"></i>Student </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Courses </a></li>
            
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

            require '../connection.php';
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
                        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Student <em>[Update]</em></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                         <form action="edit_action.php" method="post">
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
                              <input type="text" name="gender" value="male" class="form-control form-control-lg" value="<?php echo $user['gender']; ?>">
                              <!-- Male -->
                              <!-- <input type="radio" name="gender" value="female" class="form-control form-control-lg" value="<?php echo $user['']; ?>">Female -->
                              <!-- <input type="radio" name="gender" value="other" class="form-control form-control-lg" value="<?php echo $user['']; ?>">Other -->
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
                              <button type="submit" name="edit-btn" class="btn btn-lg btn-block">Update</button>
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
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery.cookie/jquery.cookie.js"> </script>
    <!-- <script src="../assets/chart.js/Chart.min.js"></script> -->
    <script src="../assets/jquery-validation/jquery.validate.min.js"></script>
    <!-- <script src="../assets/js/charts-home.js"></script> -->
    <!-- Main File-->
    <script src="../assets/js/front.js"></script>
  </body>
</html>