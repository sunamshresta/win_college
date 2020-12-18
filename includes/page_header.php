<header class="main-header clearfix" role="header">
  <div class="logo">
    <a href="../index.php">
    	<!-- <em>WIP</em> <small>college</small> -->
    	<img src="../attachments/Win Logo Main High.jpg" alt="logo" height="100" width="100" style="border-radius: 50px;">
    </a>
  </div>
  <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
  <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
      <li class=""><a href="../index.php">Home</a></li>
      <li class="<?php if($page=='about'){ echo 'active'; } ?>"><a href="about.php">About Us</a></li>
      <li class="<?php if($page=='course'){ echo 'active'; } ?>"><a href="course.php">Courses</a></li>
      <li class="<?php if($page=='contact'){ echo 'active'; } ?>"><a href="contact.php">Contact</a></li>
      <li><a href="../login.php">Login</a></li>
    </ul>
  </nav>
</header>