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

	// $detail_query="UPDATE student_details set first_name=?, middle_name=?, last_name=?, gender=?, dob=?, address1=?, address2=?, email=?, mobile=? where id=?;";
	// $detail_query = "INSERT INTO student_details SET first_name=?,middle_name=?,last_name=?,dob=?,gender=?,address1=?,address2=?,email=?,mobile=?";
        // $detail_stmt = $conn->prepare($detail_query);
        // var_dump($detail_stmt);
        // $detail_stmt->bind_param('sssssssssd', $firstName, $middleName, $lastName, $dob, $gender, $address1,$address2,$email,$mobile,$id);
        // $detail_result = $detail_stmt->execute();
    $detail_query="UPDATE student_details set first_name='$firstName', middle_name='$middleName', last_name='$lastName', gender='$gender', dob='$dob', address1='$address1', address2='$address2', email='$email', mobile='$mobile',course=$course where id=$id;";
    $detail_result = mysqli_query($conn, $detail_query);

	if($detail_result) {
		// $detail_stmt->close();

		$_SESSION['success_msg'] = 'Student detail has been updated successfully !';
		header('location: students.php');
	} else {
		$_SESSION['error_msg'] = 'Unable to update student details.';
		header('location: student_edit.php?id='.$id);
	}
	
 
}