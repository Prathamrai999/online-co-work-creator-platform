<?php include('connection.php');

//isset($_POST['amt']) &&
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']))

{
	$payment_id=$_POST['payment_id'];
	$name=$_POST['name'];
	//$amt=$_POST['amt'];
	
	$email=$_POST['email'];
	$number=$_POST['number'];
	$payment_status="pending";
	$added_on=date('Y-m-d h:i:s');
	
	mysqli_query($con,"insert into pay_details(name,email,number,payment_status,payment_id,added_on) values('$name','$email','$number','$payment_status','$payment_id','$added_on')  "  );

$_SESSION['OID']= mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID']) )
{
	$payment_id=$_POST['payment_id'];
	$name=$_POST['name'];
	//$amt=$_POST['amt'];
	
	$email=$_POST['email'];
	$number=$_POST['number'];
	$payment_status="pending";
	$added_on=date('Y-m-d h:i:s');
	
	mysqli_query($con,"UPDATE  pay_details SET payment_status ='complete' , payment_id = '$payment_id' where id='".$_SESSION['OID']."'");


}






?>