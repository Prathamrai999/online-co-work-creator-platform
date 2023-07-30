<?php require('inc/connection.php');
require('inc/function.php');
$msg='';
$condition='';

  
if (isset($_POST['submit']))
   {
   	
    $email = get_safe_value($con,$_POST['passport']);
	$passport=get_safe_value($con,$_POST['passport']);
    $cpassport=get_safe_value($con,$_POST['cpassport']);
	
	$token=get_safe_value($con,$_POST['pass_token']);
	
	if(!empty($token))
	
	       {
		   	if(!empty($email) && !empty($passport) && !empty($cpassport))
			
			{
			$cq=  "SELECT verify_token FROM  admin_users  where verify_token='$token' LIMIT 1 ";
	        $cq_run = mysqli_query($con,$cq);
			
			if(mysqli_num_rows($cq_run)>0)
			
			{
			if($passport = $cpassport)
			{
				
			$update_pass = "UPDATE admin_users SET password = '$passport'  where verify_token='$token' LIMIT 1 ";
			$update_pass_run = mysqli_query($con,$update_pass);
			
			if($update_pass_run)
			
			{
				$_SESSION['status'] = "Password Updated Successfully";
	            header("location:login.php");
	              exit(0);
				  //password-change.php?token=$token&email=$email//	
			}
			
			else
			{
				//pass not updated
				 $_SESSION['status'] = "Not Updated";
	                             header("location:password-change.php?token=$token&email=$email");
	                             exit(0);
			}
			
			
			}
			
			
			else
			{
				// pass and cpass not match
				 $_SESSION['status'] = "Not matched cpass and pass";
	                             header("location:password-change.php?token=$token&email=$email");
	                             exit(0);
			}
			
			}
			
			else	
			  {
			  	//something wrong
				 $_SESSION['status'] = "something went wrong";
	                             header("location:password-change.php?token=$token&email=$email");
	                             exit(0);
			  }
			
			
			
			}
			
		   }
	 
	                         else
	                       	{
		                	    $_SESSION['status'] = "Invalid Token";
	                             header("location:password-change.php?token=$token&email=$email");
	                             exit(0);
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
                <form class="pt-3" action="password-change.php" method="POST">
				
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
				  
				   <input type="hidden" name="pass_token" value = "<?php if(isset($_GET['token'])){echo $_GET['token'];}?> ">
                  
				  <div class="form-group">
				  
                    <input type="email" name="passport" class="form-control form-control-lg" id="exampleInputEmail1"  value = "<?php if(isset($_GET['email'])){echo $_GET['email'];}?> " placeholder="Your Email ID" required>
                  </div>
                  <div class="form-group">
				  
                    <input type="name" name="passport" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="New Password" required>
                  </div>
                  <div class="form-group">
                    <input type="name" name="cpassport" class="form-control form-control-lg" id="exampleInputPassword1" placeholder=" Confirm Password" required>
                  </div>
                  <div class="mt-3">
                    <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" >SIGN IN</a--->
					 <button type="submit" name="submit" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Save Password </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Save my Password </label>
                    </div>
						
                    <!--a href="users-password-reset.php" class="auth-link text-black">Forgot password?</a-->
                  </div>
                  <!--div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                  </div--->
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
			
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