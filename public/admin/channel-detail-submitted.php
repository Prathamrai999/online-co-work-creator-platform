<?php
require('inc/connection.php');
require('inc/function.php');
$msg='';
 //if($count>0){
  //$row=mysqli_fetch_assoc($res);

//$_SESSION['ADMIN_ID']=$row['id'];
//$logname = $_SESSION['ADMIN_USERNAME'];
/////$query = mysqli_query($con,"SELECT * FROM admin_users where username = '$logname'");
//$row=mysqli_fetch_array($query);
//$id = $row['id'];

//echo $id;

if (isset($_POST['submit']))
{
	$emaiil= get_safe_value($con,$_POST['emaiil']);
	$channame= get_safe_value($con,$_POST['channame']);
	$channurl= get_safe_value($con,$_POST['channurl']);
   	$channbio= get_safe_value($con,$_POST['channbio']);

        $checkchannel = "select channame from users_channel  where add_by ='".$_SESSION['ADMIN_ID']."' ";
		$checkchannel_run = mysqli_query($con,$checkchannel);
		
		if(mysqli_num_rows($checkchannel_run)>0)
		{
		 $_SESSION['game']=" You have already added Your Channel";
			header("location:index.php");
		  
		}
		
		else
		{
			
		

$q=  "INSERT INTO users_channel (emaiil,channame,channurl,channbio,add_by) VALUES('$emaiil','$channame','$channurl','$channbio','".$_SESSION['ADMIN_ID']."')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
		 header("location:index.php");
		 $_SESSION['success']=" Channel Detail Added Successfully";
	}	

	}
	
	}
	?>
	