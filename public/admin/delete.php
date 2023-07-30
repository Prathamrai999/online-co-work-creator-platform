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
  //youtuber's profile
$sql  = "select * from users_video ";
  $res1 = mysqli_query($con,$sql);
  
  //blogger's profile
  
  $sql1  = "select * from users_blogs ";
  $res = mysqli_query($con,$sql1);
  
								
	//Delete for users blogs..//
	if(isset($_POST['delete_btn_set']))
	
	{
		$del_id = $_POST['delete_id'];
		$q=  "	DELETE FROM users_blogs WHERE id = '$del_id'";
$query = mysqli_query($con,$q);	
	}
	
	//Delete for users videos..//
	if(isset($_POST['delete_btn_set1']))
	
	{
		$dele_id = $_POST['dele_id'];
		$q1=  "	DELETE FROM users_video WHERE id = '$dele_id'";
$query1 = mysqli_query($con,$q1);	
	}
	
	
	?>




