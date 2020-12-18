<?php 
// redirect user to login page if they're not logged in | unverified | not admin type | cookie expired 
	if (!$_SESSION['id'] || !$_SESSION['username'] || ($_SESSION['verified'] == 0) || $_SESSION['type'] == 'student' || !$_COOKIE['user']) {
	    session_destroy();
	    header('location: ../login.php');
	  }
 ?>