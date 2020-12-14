<?php 
session_start();
include 'connection.php';

$id=$_GET['id'];
$query="UPDATE users set deleted=true where id=$id";
$result=mysqli_query($conn, $query);

if($result) {
	$_SESSION['success_msg'] = 'Admin has been deleted successfully.';
} else {
	$_SESSION['error_msg'] = 'Unable to delete the admin.';
}

header('location: admin.php');

 ?>