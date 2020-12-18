<?php 
session_start();
include '../Auth/connection.php';

$id=$_GET['id'];
$query="UPDATE users set deleted=true where id=$id";
$result=mysqli_query($conn,$query);

if($result) {
	$_SESSION['success_msg'] = 'Student has been deleted successfully.';
} else {
	$_SESSION['error_msg'] = 'Unable to delete the student.';
}

header('location: students.php');

 ?>