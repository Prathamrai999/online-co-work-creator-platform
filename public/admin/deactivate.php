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
$squsersl  = "select * from admin_users ";
  $resqusersl1 = mysqli_query($con,$squsersl);
  
  
  
								
	//Delete for users blogs..//
	if(isset($_POST['deacti']))
	
	{
		$deact_id = $_POST['id'];
		$q_decti=  "	UPDATE admin_users  SET role = 99 WHERE id = '$deact_id'";
$openallquery = mysqli_query($con,$q_decti);


if(!$openallquery)
	{
    die('Error: ' . mysqli_error($con));
        }

else
{
    $_SESSION['status'] = "User Deactivated Successfully";
	header("location:index.php");
}

	
	}
	
	