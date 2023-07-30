<?php
 require('inc/connection.php');
require('inc/function.php');
//fetching login details
////$datetime = date("Y-m-d H:i:s"); 
//$timestamp = strtotime($datetime); //in milliseconds
    mysqli_query($con,"UPDATE admin_users SET logouttime = NOW() WHERE username = '$_SESSION[ADMIN_USERNAME]'");
//$sql = "UPDATE admin_users SET logouttime = NOW() WHERE  where username = '$logname' "; 

//$sql_run = mysqli_query($con,$sql);

    unset($_SESSION['ADMIN_LOGIN']);
	unset($_SESSION['ADMIN_USERNAME']);
	header('location:login.php');
	die();

?>