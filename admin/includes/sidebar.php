<nav class="side-navbar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4"><?php echo strtoupper($_SESSION['username']); ?></h1>
      <p>Web Designer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="<?php if($page=='admin'){ echo 'active'; } ?>"><a href="admin.php"> <i class="icon-user"></i>Admin </a></li>
    <li class="<?php if($page=='student'){ echo 'active'; } ?>"><a href="students.php"> <i class="fa fa-users"></i>Student </a></li>
    <!-- <li><a href="tables.html"> <i class="icon-grid"></i>Courses </a></li> -->
    
  </ul>
</nav>