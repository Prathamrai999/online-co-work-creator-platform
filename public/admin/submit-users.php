<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



require('inc/connection.php');
require('inc/function.php');
$msg2='';


function updateReferral(){
	$query = "SELECT * FROM admin_users WHERE refercode = '$_POST[referralcode]'";
	$result  = mysqli_query($GLOBALS['con'],$query);
	if($result)
	{
		if(mysqli_num_rows($result)==1)
		{
			$result_fetch=mysqli_fetch_assoc($result);
			$point = $result_fetch['referpoint']+10;
			$update_query = "UPDATE admin_users SET referpoint = '$point' WHERE username = '$result_fetch[username]'";
			if(!mysqli_query($GLOBALS['con'],$update_query))
			{
							echo "<script>alert('cannot run query')
						window.location.href='index.php';
						</script>";	
						exit;
			}
		}
		else
	{
		echo "<script>alert('Invalid Referral Code')
		window.location.href='index.php';
		</script>";
		exit;
	}
	
	}
	
	else
	{
		echo "<script>alert('Error')
		window.location.href='index.php';
		</script>";
		exit;
	}
}

 

if (isset($_POST['submit']))
{
	$username= get_safe_value($con,$_POST['username']);
	$password= get_safe_value($con,$_POST['password']);
	$role= get_safe_value($con,$_POST['role']);
   	$verify_token = md5(rand());
  $checkmail = "select username from admin_users WHERE username = '$username'";
  $checkmail_run = mysqli_query($con,$checkmail);
  
  if(mysqli_num_rows($checkmail_run)>0)
  {
  	
	$_SESSION['mess'] = "OOPS ! Email Already Exists Please Login with Your credentials  " ; 
	header("location:register.php");
  }
  
  else
  
  {
  	if($_POST['referralcode']!='')
	
	{
		updateReferral();
	}
  
	$referralcode = strtoupper(bin2hex(random_bytes(7)));
	
$q=  "INSERT INTO admin_users (username,password,verify_token,role,refercode,referpoint) VALUES('$username','$password','$verify_token','$role','$referralcode','0')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
    die('Error: ' . mysqli_error($con));
        }
	
	else
	{
		//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'prathamrai456@gmail.com';                     //SMTP username
    $mail->Password   = 'nxeejmkynysdmwpn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('prathamrai456@gmail.com');
    $mail->addAddress($username);     

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'no reply';
    $mail->Body    = 'Here is the verification link <b><a href="localhost/Remote/connect/applab/admin/verify-email.php?verification='.$verify_token.'">Click Here</a></b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $msg= 'Message has been sent! Please Verify Your email address';
	header("location:login.php");
} 

catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 
}
	}	
	
	}
	
	
	?>