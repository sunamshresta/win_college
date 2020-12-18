<?php $page = 'course'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wentworth Institute | Courses</title>
	<!-- Favicon-->
    <!-- <link rel="shortcut icon" href="attachments/favicon.icon"> -->
    <link rel="shortcut icon" href="../favicon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">


</head>
<body>
  <!--header-->
  <?php require '../includes/page_header.php'; ?>


  <section class="section courses mt-4" data-section="section4">
    <div class="container-fluid">
	<div class="section-heading">
        <h2>All courses</h2>
    </div>
	<div class="row">
	  <?php 
	  	require '../Auth/connection.php';

	  	$query = "SELECT * FROM courses";

	  	$result=mysqli_query($conn,$query);
	  	while ($course=mysqli_fetch_assoc($result)) { 
	   ?>
     <div class="col-md-3">
        <div class="card" style="width: 18rem;background-color: white; margin: 10px;min-height: 370px;">
            <img src="../attachments/Win Logo Main High.jpg" alt="Course #1" height="150">
            <div class="card-body">
              <h5 class="card-title"><?php echo $course['Course_Name']; ?></h5>
              <h6><em>Code</em> :<?php echo $course['VET_Qual']; ?></h6>
              <p><?php echo $course['Course_Duration']; ?> year duration.</p>
              <div class="">
                <a class="pull-right" href="#">More <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>

      </div>
  <?php } ?>
  </div>
 
  </section>


  <?php require '../includes/footer.php'; ?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/video.js"></script>
    <script src="../assets/js/slick-slider.js"></script>
    <script src="../assets/js/custom.js"></script>
 
	
</body>
</html>