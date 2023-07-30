<?php require('inc/connection.php');
require('inc/function.php');
$msg1='';
$msg='';
if(isset($_POST['submit'])){
   $logname= get_safe_value($con,$_POST['logname']);
  $logpass= get_safe_value($con,$_POST['logpass']);

//$logintime = date("Y-m-d h:i:sa");
  $toi = "update admin_users set last_login = NOW() where username= '$logname' and password = '$logpass'";
  $toi_run =mysqli_query($con,$toi);
  $sql  = "select * from admin_users where username= '$logname' and password = '$logpass'";
  $res = mysqli_query($con,$sql);
  $count=mysqli_num_rows($res);
  if($count>0)
  
  {
  $row=mysqli_fetch_assoc($res);
  	$_SESSION['ADMIN_LOGIN']='yes';
	$_SESSION['ADMIN_USERNAME']=$logname;
	$_SESSION['ADMIN_ROLE']=$row['role'];
	$_SESSION['ADMIN_TYPE']=$row['super_admin'];
	$_SESSION['ADMIN_ID']=$row['id'];
	$_SESSION['ADMIN_VERIFY_STATUS']=$row['verify_status'];
	
	if($_SESSION['ADMIN_VERIFY_STATUS'] == 1 )
	{
		header('location:index.php');
	die();
	}
	
	else{
	      echo "Please Verify email address";
		header('location:login.php');
	die();
	}
	
	
	
	
  }
  
  
  else{
  	$msg1="Please Enter Correct Login Credentials";
  }
  
 
}
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
  <body>
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
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="" method="POST">
				
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
                    <input type="email" name="logname" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="logpass" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                    <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" >SIGN IN</a--->
					 <button type="submit" name="submit" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>SIGN IN </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
						
                    <a href="users-password-reset.php" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="mb-2">
				  
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
				  </div>
                </form>
				<form action = "premium.php" method= "POST" >
                    <button type="submit" name="hello" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Become a Premium User</button>
                  
				  </form>
              </div>
			 
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>