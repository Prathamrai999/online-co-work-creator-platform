<?php
require('inc/connection.php');
require('inc/function.php');

if(isset($_GET['verification']))
//1// 
{
	$verification = $_GET['verification'];
	$verify_query = "SELECT verify_token,verify_status FROM admin_users WHERE verify_token = '$verification' LIMIT 1";
	$reso = mysqli_query($con,$verify_query);
	
	
	if(mysqli_num_rows($reso)>0)
	//2// 
	{
		$row= mysqli_fetch_array($reso);
		//echo $row['verify_token'];
		
		if($row['verify_status'] == '0')
		{
			$clicked_token = $row['verify_token'];
			$update_query = "UPDATE admin_users SET verify_status ='1' WHERE verify_token='$clicked_token' LIMIT 1  ";
			$update_query_run =  mysqli_query($con,$update_query);
			
			
			if($update_query_run){
				$_SESSION['status'] = "Account Verification Succesfull";
	header("location: login.php");
	exit(0);
			}
			
			else
			{
				$_SESSION['status'] = "Verification Failed";
	header("location: login.php");
	exit(0);
			}	
		}
		
		else
		{
			$_SESSION['status'] = "Email Already Verified .Please Login";
	header("location: login.php");
	exit(0);
		}
	}
//2 close //	
	else
	{
		$_SESSION['status'] = "This token not available";
	header("location: login.php");
	}
}

else
{
	$_SESSION['status'] = "Not Allowed";
	header("location: login.php");
}
?>