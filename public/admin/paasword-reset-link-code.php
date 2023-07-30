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

function send_reset_email($get_email,$token)
{

$mail = new PHPMailer(true);


try {
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
    $mail->addAddress($get_email);     

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'no reply';
    $mail->Body    = "Here is the Password Reset link <b><a href='localhost/Remote/connect/applab/admin/password-change.php?token=$token&email=$get_email'>Click Here</a></b>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
	} 

catch (Exception $e) 
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} 


if (isset($_POST['submit']))
{
	$email=get_safe_value($con,$_POST['emailid']);
	$token = md5(rand());
	
	$find_email  = "select username from admin_users where username = '$email' LIMIT 1";
  $re = mysqli_query($con,$find_email);
  
  if(mysqli_num_rows($re)>0)
  {
  	$row=mysqli_fetch_array($re);
	//$get_name =$row['email'];//
	$get_email =$row['username'];
	
	
	$update_token = "UPDATE admin_users SET verify_token = '$token' where username = '$get_email' LIMIT 1";
	$update_token_run = mysqli_query($con,$update_token);
	
	if($update_token_run){
	send_reset_email($get_email,$token);
		$_SESSION['status'] = "We have sent a Password reset link ";
		header("location:users-password-reset.php");
	exit(0);
	}
	
	else{
		$_SESSION['status'] = "Something Went Wrong #1";
	header("location:users-password-reset.php");
	exit(0);
	}
	
	
  }
  
  
  else{
  	$_SESSION['status'] = "NO records Found";
	header("location:users-password-reset.php");
	exit(0);
  }
	
}