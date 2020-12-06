<?php 
	include '../connection.php';
if(isset($_POST['edit-btn']))
{
	$id=intval($_POST['id']);
	$firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address1 = $_POST['permanentAddress'];
    $address2 = $_POST['temporaryAddress'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $type = 'student';
    echo $id;

	$detatil_query="UPDATE student_details set first_name=?', middle_name=?', last_name=?', gender=?', dob=?', address1=?', address2=?', email=?', mobile=?' where id='$id';";
	$detail_query = "INSERT INTO student_details SET first_name=?,middle_name=?,last_name=?,dob=?,gender=?,address1=?,address2=?,email=?,mobile=?";
        $detail_stmt = $conn->prepare($detail_query);
        $detail_stmt->bind_param('sssssssss', $firstName, $middleName, $lastName, $dob, $gender, $address1,$address2,$email,$mobile);
        $detail_result = $detail_stmt->execute();

	// $result=mysqli_query($conn,$query);
	// dump($result);exit;
	if($detail_result)
	{
		$detail_stmt->close();
		header('location: ../students.php');
	}
	else
	{
		header('location: ../students/edit.php?id='.$id);
	}
	
 
}