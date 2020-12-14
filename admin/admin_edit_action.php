<?php 
session_start();
include 'connection.php';
if(isset($_POST['edit-btn']))
{
	$id=($_POST['id']);
    $email = $_POST['email'];
    $username = $_POST['username'];
    $type = "admin";
    echo $id;
    // echo $email;exit;

	// $detail_query="UPDATE users SET email=?, username=? WHERE id=? AND type=?";
    // $detail_stmt = $conn->prepare($detail_query);
	// var_dump($detail_stmt);
    // $detail_stmt->bind_param('ssis', $email, $username, $id, $type);
    // $detail_result = $detail_stmt->execute();
    // var_dump($detail_result);exit;
	$detail_query="UPDATE users SET email='$email', username='$username' WHERE id=$id";
	$result=mysqli_query($conn, $detail_query);
	// var_dump($result);exit;

	if($result) {
		// $detail_stmt->close();

		$_SESSION['success_msg'] = 'Admin detail has been updated successfully.';
		header('location: admin.php');
	} else {
		$_SESSION['error_msg'] = 'Unable to update admin detail.';
		header('location: admin_edit.php?id='.$id);
	}
	
 
}