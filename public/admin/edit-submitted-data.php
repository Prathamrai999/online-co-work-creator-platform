<?php
require('inc/connection.php');
require('inc/function.php');
$msg='';

if (isset($_POST['update']))
{
	$name= get_safe_value($con,$_POST['name']);
	$email= get_safe_value($con,$_POST['email']);
	$number= get_safe_value($con,$_POST['number']);
   	$zipcode= get_safe_value($con,$_POST['zipcode']);
	$state= get_safe_value($con,$_POST['state']);
	$address= get_safe_value($con,$_POST['address']); 
		$bio= get_safe_value($con,$_POST['bio']);
	$skill= get_safe_value($con,$_POST['skills']);
	$experience= get_safe_value($con,$_POST['experience']);
		$salary= get_safe_value($con,$_POST['salary']);
	$resume= get_safe_value($con,$_POST['resume']);


$q=  "UPDATE profile SET name='$name',email='$email',number='$number',zipcode='$zipcode',state='$state',address='$address',bio='$bio',skills='$skills',experience='$experience',salary='$salary',resume='$resume'where id='$id'";

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