<?php
require('inc/connection.php');
require('inc/function.php');
$msg='';
$sql  = "select * from admin_users where username = '$_SESSION[ADMIN_USERNAME]'";
		  $res = mysqli_query($con,$sql);
		  $row=mysqli_fetch_assoc($res);
		  $point = $row['referpoint'];
		 // $point = "select referpoint from admin_users where username = '$_SESSION[ADMIN_USERNAME]'";
		 // $pack = mysqli_query($con,$point);
		  // $abcd=mysqli_fetch_assoc($pack);
  //$row=mysqli_fetch_assoc($res);

//$_SESSION['ADMIN_ID']=$row['id'];
//$logname = $_SESSION['ADMIN_USERNAME'];
/////$query = mysqli_query($con,"SELECT * FROM admin_users where username = '$logname'");
//$row=mysqli_fetch_array($query);
//$id = $row['id'];

//echo $id;
if(isset($_POST['pays']))
{
	
	$payemail= get_safe_value($con,$_POST['payemail']);
   	$payname= get_safe_value($con,$_POST['payname']);
	$acnum= get_safe_value($con,$_POST['acnum']);
	$acifsc= get_safe_value($con,$_POST['acifsc']);
    $payamt= get_safe_value($con,$_POST['payamt']);
	date_default_timezone_set('Asia/Kolkata');
	$date= date('Y-m-d H:i:sa');
	$balance = ((int)$point-(int)$payamt);

    if(($payamt > 1000) && ($payamt <= $row['referpoint']))
	{

$p=  "INSERT INTO users_withdrawal (payemail,payname,acnum,acifsc,payamt,add_by,dateof) VALUES('$payemail','$payname','$acnum','$acifsc','$payamt','".$_SESSION['ADMIN_ID']."','$date')";

	$query = mysqli_query($con,$p);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
$_SESSION['error']="Data Submit Error!!";
}


	else
	{
	     //$point= mysqli_query($con,"select referpoint from admin_users where username = '$_SESSION[ADMIN_USERNAME]'");
		 //$constant = (int)$point-(int)$payamt ; //10000 - 3000 = 70000
	     $update_query = "UPDATE admin_users set referpoint = $balance where username = '$_SESSION[ADMIN_USERNAME]' " ;
		 $up_run = mysqli_query($con ,$update_query ) ;
		 
		 if($up_run)
		 {
		 
		 		 header("location:refer-and-earn.php");
		$_SESSION['succe']=" Amount Will be deposited in your A/c within 2-3 days";
		}
		
		else
		{
			header("location:refer-and-earn.php");
		$_SESSION['fail2']="Something Went Wrong !";
		}
		
	}

	} 
	
	else {
	header("location:refer-and-earn.php");
		$_SESSION['fail']=" Points Should be More than 1000";
	}
	  
	}
	
	?>