<?php

require('admin/inc/connection.php');
require('admin/inc/function.php');


if(isset($_POST['sendcont']))

{
	$name= get_safe_value($con,$_POST['w4ho']);
	$email= get_safe_value($con,$_POST['e0mail']);
	$country= get_safe_value($con,$_POST['c1ountry']);
	$message= get_safe_value($con,$_POST['m2essage']);
	date_default_timezone_set('Asia/Kolkata');
	$date= date('Y-m-d H:i:sa');
	
	$hero = "INSERT INTO  contact_users (name,email,country,message,created_at) VALUES('$name', '$email' , '$country'  , '$message', '$date')";
	$hero_run = mysqli_query($con,$hero);
	
	if($hero_run)
	{
				 header("location:index.php");
		   $_SESSION['status'] = "Your Details Submitted Successfully";
		
	}
	
	else
	{
				die('Error: ' . mysqli_error($con));
		
	}
	
	
}

if(isset($_POST['news']))
{
	$newemail = get_safe_value($con,$_POST['emnail']);
	
	$query = " INSERT INTO newsletter (email) VALUES('$newemail')";
	$query_run = mysqli_query($con,$query);
	
	if($query_run)
	{ 
		echo '<script>alert("You Email has been Subscribed For Newsletter !") ; window.location.href="index.php" ; </script>';  
		
	}
	
	else
	{
		die('Error: ' . mysqli_error($con));
	}
}

?>