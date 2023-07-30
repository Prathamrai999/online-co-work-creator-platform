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

if (isset($_POST['submitt']))
{
	
	$blogtitle= get_safe_value($con,$_POST['blogtitle']);
   	$bloglink= get_safe_value($con,$_POST['bloglink']);
	date_default_timezone_set('Asia/Kolkata');
	$blogdate= date('Y-m-d H:i:sa');

  $checkblog = "select * from users_blogs WHERE add_by = '".$_SESSION['ADMIN_ID']."'";
  $checkblog_run = mysqli_query($con,$checkblog);
  
  if(mysqli_num_rows($checkblog_run)>0)
  {
  	
	//echo '<script>alert("OOPS ! It Seems You have Already Add Your Website....")</script>' ; 
	
	$_SESSION['blog'] = " Your Account is Limited to add only one Blog <br> Subscribe To Add More ";
	header("location:index.php");
  }
  
  else
  
  {

$p=  "INSERT INTO users_blogs (blogtitle,bloglink,blogdate,add_by) VALUES('$blogtitle','$bloglink','$blogdate','".$_SESSION['ADMIN_ID']."')";

	$query = mysqli_query($con,$p);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
		 header("location:index.php");
		 $_SESSION['success']=" Blog Added Successfully";
	}	

	}
	
	}
	//and add_by = '".$_SESSION['ADMIN_ID']."'
	if (isset($_POST['submitts']))
{
	$emaiil= get_safe_value($con,$_POST['emaiil']);
	$webname= get_safe_value($con,$_POST['webname']);
	$weburl= get_safe_value($con,$_POST['weburl']);
   	$webbio= get_safe_value($con,$_POST['webbio']);
	
	  $checkweb = "select webname from users_website WHERE add_by = '".$_SESSION['ADMIN_ID']."'";
  $checkweb_run = mysqli_query($con,$checkweb);
  
  if(mysqli_num_rows($checkweb_run)>0)
  {
  	
	//echo '<script>alert("OOPS ! It Seems You have Already Add Your Website....")</script>' ; 
	
	$_SESSION['over'] = " You have already added your website ";
	header("location:index.php");
  }
  
  else
  
  {
	



$q=  "INSERT INTO users_website (emaiil,webname,weburl,webbio,add_by) VALUES('$emaiil','$webname','$weburl','$webbio','".$_SESSION['ADMIN_ID']."')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
		 header("location:index.php");
		 $_SESSION['success']=" Blog Website Added Successfully";
	}	

	}
	}
	
	?>
	