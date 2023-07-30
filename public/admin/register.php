<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
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
							<?php
	if(isset($_SESSION['mess']))
	{
	?>
	<div class="alert alert-danger" role="alert">
	    <a href="register.php" class="close" data-dismiss="alert">&times;</a>
	    <strong>!</strong> <?php echo $_SESSION['mess']; ?>
	</div>
	
	<?php
	}
	unset($_SESSION['mess']);
	?>

              
                  <img src="assets/images/logo-dark.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
	  <form class="pt-3" action="submit-users.php" method="POST">
                  <div class="form-group">
                    <input type="email" name = "username" class="form-control form-control-lg " id="exampleInputUsername1" placeholder="Email Address" required>
					
                  </div>
				  
				  <?php
				  
				  session_destroy();?>
			
                  <!--div class="form-group">
                    <input type="email" name = "email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <!--div class="for--m-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option>United States of America</option>
                      <option>United Kingdom</option>
                      <option>India</option>
                      <option>Germany</option>
                      <option>Argentina</option>
                    </select>
                  </div>
				  if(isset($_POST['check_emailbtn']))
{
        $username= get_safe_value($con,$_POST['username']);
	$checkmail = "select username FROM admin_users WHERE username = $username";
	$checkemail_run($con,$checkemail);

	if(mysqli_num_rows($checkemail_run)>0)
	{
		//$SESSION['status'] = "$username already exists";
		//header("location: register.php");
		echo "Email ID Already Exists.. !"
	}
	
	else
	{
		echo "Email ID is Available";
	}
}
    
				  ----->
				  <!----Trying 
				  <button type="submit" class="height_60px email_send_otp" onclick="email_send_otp()">
                      <!--i class="mdi mdi-facebook mr-2"></i>Send OTP</button>
					  
				<input type = "text" id = "email_send_otp" placeholder = "OTP" style= "width:45%" class="email_verify_otp">
					  
				<button type="submit" class="height_60px email_verify_otp" onclick="email_verify_otp()">
                      <!--i class="mdi mdi-facebook mr-2"></i>Verify OTP</button>
					  
					  <span id ="email_otp_result" ></span>
					  
					    <style>
					  .email_verify_otp{
					  	display:none;}
						.height_60px{
						height:60px;
					  }
					  </style>
				 <!-- -----===---->
				  
				  
				  
				  
				  
                  <div class="form-group">
                    <input type="password" name = "password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
				  
				   <div class="form-group">
                    <select name = "role" class="form-control form-control-lg" id="exampleInputUsername1"required>
					  <option value="volvo">Select Your Role</option>
  					<option value="1">Blogger</option>
					<option value="0">Youtuber</option>
					</select>
                  </div>
				  
				  <div class="form-group">
                    <input type="text" name = "referralcode" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Referral Code (If any )" >
                  </div>
				  
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                 <button type="submit" class="btn btn-block btn-facebook auth-form-btn" name="submit">
                      <!--i class="mdi mdi-facebook mr-2"></i-->SIGN UP</button>
                  </div>
				  <!--?php echo $msg2 ; ?-->
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
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
    <!-- Plugin js for this page 
	
	<script>
	function email_send_otp(){
		jQuery('#email').attr('disabled',true);
		jQuery('.email_verify_otp').show();
		jQuery('.email_sent_otp').hide();
	}
	function email_verify_otp(){
		jQuery('.email_verify_otp').hide();
	jQuery('#email_otp_result').html('Email ID Verified');
	
	}
	</script====------>
	
	
	<!--script>
	$(document).ready(function() {
		$('.email_id').keyup(function (e) {
			var email = $('.email_id').val();
			//console.log(response);
			
			$.ajax({
				type: "POST",
				url: "submit-users.php",
				data: {
					'check_emailbtn':1,
					'username':username,
				},
				
				success: function(response){
				$('.email_error').text(response);	
				}
				
			});
		});
	});
	
	</script---->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>