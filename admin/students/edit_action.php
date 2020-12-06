<?php 
if(isset($_POST['edit-btn']))
{
	include '../conection.php';
	$id=$_POST['id'];
	$title=$_POST['subject'];
	$post=$_POST['message'];

	$query="UPDATE table_2 set subject='$title',message='$post' where id='$id'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "Data updated";
	}
	else
	{
		echo "Error updating";
	}
 
}