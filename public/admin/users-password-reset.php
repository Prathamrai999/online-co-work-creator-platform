<?php require('inc/connection.php');
require('inc/function.php');
$msg1='';
$msg='';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href=assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href=assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
 <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo-dark.svg">
				  <?php echo $msg  ?>
                </div>
				 <div class="detail_error">
				 </div> 
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Enter Your Email to Reset.</h6>
                <form class="pt-3" action="paasword-reset-link-code.php" method="POST">
				
				 <?php if(isset($_SESSION['status']))
				 {
				  ?>
				 <div class="alert alert success">
				 <h5><?=$_SESSION['status'];?></h5>
				 </div>
				 <?php
				 
				 unset($_SESSION['status']);
				 }
				  ?>
				
                  <div class="form-group">
                    <input type="email" name="emailid" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Id" required>
                  </div>
				   <div class="mt-3">
                    <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" >SIGN IN</a--->
					 <button type="submit" name="submit" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Send Password Reset Link </button>
                  </div>