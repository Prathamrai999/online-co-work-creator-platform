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
	$name= get_safe_value($con,$_POST['name']);
	$email= get_safe_value($con,$_POST['email']);
	$number= get_safe_value($con,$_POST['number']);
   	$zipcode= get_safe_value($con,$_POST['zipcode']);
	$state= get_safe_value($con,$_POST['state']);
	$address= get_safe_value($con,$_POST['address']);
		$bio= get_safe_value($con,$_POST['bio']);
	$skills= get_safe_value($con,$_POST['skills']);
	$experience= get_safe_value($con,$_POST['experience']);
		$salary= get_safe_value($con,$_POST['salary']);
	$resume= get_safe_value($con,$_POST['resume']);


$q=  "INSERT INTO profile (name,email,number,zipcode,state,address,bio,skills,experience,salary,resume,add_by_id) VALUES('$name','$email','$number','$zipcode','$state','$address','$bio','$skills','$experience','$salary','$resume' , '".$_SESSION['ADMIN_ID']."')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
		 header("location:index.php");
	}	

	}
	?>
	