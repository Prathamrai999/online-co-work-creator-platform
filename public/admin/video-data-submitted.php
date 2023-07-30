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
	
	$videotitle= get_safe_value($con,$_POST['videotitle']);
   	$videolink= get_safe_value($con,$_POST['videolink']);
	date_default_timezone_set('Asia/Kolkata'); 
	$videodate=date('d-m-y h:i:sa');
     
	 
	 $checkvideo = "select * from users_video WHERE add_by = '".$_SESSION['ADMIN_ID']."'";
  $checkvideo_run = mysqli_query($con,$checkvideo);
  
  if(mysqli_num_rows($checkvideo_run)>0)
  {
  	
	//echo '<script>alert("OOPS ! It Seems You have Already Add Your Website....")</script>' ; 
	
	$_SESSION['vilimit'] = " Your Account is Limited to add only one video ! <br> Subscribe To add More ";
	header("location:index.php");
	
  }
  
  else
  
  {
	

$q=  "INSERT INTO users_video (videotitle,videolink,videodate,add_by) VALUES('$videotitle','$videolink','$videodate','".$_SESSION['ADMIN_ID']."')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
		 header("location:index.php");
		 $_SESSION['success']=" Video Added Succesfully";
	}	

	}
	}
	?>
	