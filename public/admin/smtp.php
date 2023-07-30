<?php 



//Load Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require('inc/connection.php');
require('inc/function.php');

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
//Load Composer's autoloader
//require 'vendor\autoload.php';
//require 'vendor\phpmailer\phpmailer\src\Exception.php';
//require 'vendor\phpmailer\phpmailer\src\PHPMailer.php';
//require 'vendor\phpmailer\phpmailer\src\SMTP.php';

//php mailer component end
function sendemail_verify($username,$password,$verify_token)
{
	//Create an instance; passing `true` enables exceptions
$mail = new \PHPMailer\PHPMailer\PHPMailer();
//Server settings
//$mail->SMTPDebug = 2;
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();
  //Send using SMTP
    $mail->SMTPAuth   = true;    //Enable SMTP authentication	
    $mail->Host       = "smtp.gmail.com";       //Set the SMTP server to send through                      
    $mail->Username   = "prathamrai456@gmail.com";                     //SMTP username
    $mail->Password   = "Gangstaparadise@#123";                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("prathamrai456@gmail.com", $username);
    $mail->addAddress($username);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true); 
    $mail->Subject = 'Here is the subject';	
     $email_template = "<a href='http:localhost/Remote/connect/applab/admin/register.php/verify-email.php?token=$verify_token'>Click Here</a>
	<br></br>
	";	//Set email format to HTML

    $mail->Body    = $email_template;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->SMTPOptions = array(
'tls' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => false
) );
	
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
    //$mail->send();
   // echo 'Message has been sent';
} 
//catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}//
$msg='';
//session_start();
if(isset($_POST['submit']))

{
	$username= get_safe_value($con,$_POST['username']);
	$password= get_safe_value($con,$_POST['password']);
	//pass all form variable one by one
	$verify_token = md5(rand());
	sendemail_verify("$username", "$password","$verify_token");
	//echo "sent or not";
	}
	
	//$check_email_query = "SELECT username FROM admin_users where email = '$username' LIMIT 1 " ;
	//$check_email_query_run = mysqli_query($con, $check_email_query);
	
	///if(mysqli_num_rows($check_email_query_run) > 0)
	//{
		//$_SESSION['msg'] = "Email ID already exists";
		//header("location: register.php")
	//}//
	//else
	//{//
		////Insert User / Registered User
		//$q=  "INSERT INTO admin_users (username,password,verify_token) VALUES('$username','$password',$verify_token)";

	//$query = mysqli_query($con,$q);
	
	//if(!$query)
	//{//
//die('Error: ' . mysqli_error($con));
//}//
	
	//else
	//{//
	   //  sendemail_verify("$username", "$password","$verify_token");
	   //  $_SESSION['msg'] = "Profile Registered ! Please Verify email id";
		// header("location:login.php");
	//}	//

	//}//
	
//}//

?>