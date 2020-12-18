<?php 
session_start();
include '../Auth/connection.php';

if(isset($_POST['edit-btn']))
{
	$id=$_POST['id'];
	$firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address1 = $_POST['permanentAddress'];
    $address2 = $_POST['temporaryAddress'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];
    $type = 'student';

	$detail_query="UPDATE student_details set first_name=?, middle_name=?, last_name=?, gender=?, dob=?, address1=?, address2=?, email=?, mobile=?, course=? where id=?;";
        $detail_stmt = $conn->prepare($detail_query);
        $detail_stmt->bind_param('sssssssssss', $firstName, $middleName, $lastName, $gender, $dob, $address1,$address2,$email,$mobile,$course,$id);
        $detail_result = $detail_stmt->execute();

	if($detail_result) {
		$detail_stmt->close();

		$_SESSION['success_msg'] = 'Your detail has been updated successfully !';
		header('location: index.php');
	} else {
		$_SESSION['error_msg'] = 'Unable to update your detail.';
		header('location: edit.php?id='.$id);
	}
	
 
}