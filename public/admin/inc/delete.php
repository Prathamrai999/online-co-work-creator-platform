<?php
require('inc/connection.php');
require('inc/function.php');
$msg='';


 if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') { 
  }
  else{
   header('location:login.php');
	die();
  }

$sql  = "select * from users_video ";
  $res = mysqli_query($con,$sql);
  
  //blogger's profile
  
  $sql1  = "select * from users_blogs ";
  $res = mysqli_query($con,$sql1);
  
  if($count>0)
{
  	
$row= mysqli_fetch_array($res);

									//if (isset($_POST['delete']))
									//{
									//$id= get_safe_value($con,$_POST['id']);
									////$q=  "	DELETE FROM users_video WHERE id = '$id'";
									//$query = mysqli_query($con,$q);
										
									//if(!$query)
									//	{
									//die('Error: ' . mysqli_error($con));
									//}
	
	//else
	//{
	//     echo '<script> alert(" Data Deleted Successfully"); </script>';
	//	 header("location:index.php");
	//}	

	///}
	
	
	//delete from user's video
	
	//if (isset($_POST['delete1']))
//{
//$id= get_safe_value($con,$_POST['id']);
//$q=  "	DELETE FROM users_blogs WHERE id = '$id'";
//$query = mysqli_query($con,$q);
	
	//if(!$query)
//	{
//die('Error: ' . mysqli_error($con));
//}
	
	//else
	//{
	//     echo '<script> alert(" Data Deleted Successfully"); </script>';
	//	 header("location:index.php");
//}	

	//}
	
	if(isset($_POST['delete_btn_set']))
	
	{
		$del_id = $_POST['delete_id'];
		$q=  "	DELETE FROM users_blogs WHERE id = '$del_id'";
$query = mysqli_query($con,$q);	
	}
	
	?>




