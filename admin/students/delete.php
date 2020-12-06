<?php 
include 'connection.php';
$id=$_GET['id'];
$query="UPDATE  from table_2 where id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
	header('location:display.php');
}
else
{
	echo "Error deleting";
}

 ?>