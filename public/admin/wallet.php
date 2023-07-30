<?php require('inc/connection.php');
require('inc/function.php');

$condition='';
if($_SESSION['ADMIN_ROLE'] ==1  ){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}


  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') 
  { 
		   $sql  = "select * from admin_users where username = '$_SESSION[ADMIN_USERNAME]'";
		  $res = mysqli_query($con,$sql);
		  $row=mysqli_fetch_assoc($res);
  }
  else{
   header('location:login.php');
	die();
  }
 
 
?>

<?php include('inc/header.php');?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="E-wallet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
				
	<div class="wallet-container text-center">
	<!---Message---------->
<?php
	if(isset($_SESSION['success']))
	{
	?>
	<div class="alert alert-light">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
	</div>
	<?php
	}
	unset($_SESSION['success']);
	if(isset($_SESSION['error']))
	{
	?>
	<div class="alert alert-danger fade in">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
	</div>
	<?php
	}
	unset($_SESSION['error']);
?>

<!---Message Ends ---->
		<p class="page-title"><i class="fa fa-align-left"></i>My E-wallet<i class="fa fa-user"></i></p>

		<div class="amount-box text-center">
		
		<?php echo " <h3>$row[refercode]</h3>";?>
		<?php echo " <h3>$row[referpoint]</h3>";?>
		<?php echo " <h5>Link : <a href = 'http://localhost/remote/connect/applab/admin/?refer=$row[refercode]'>http://localhost/remote/connect/applab/admin/?refer=$row[refercode]</a></h5>";?>
		
			<img src="https://lh3.googleusercontent.com/ohLHGNvMvQjOcmRpL4rjS3YQlcpO0D_80jJpJ-QA7-fQln9p3n7BAnqu3mxQ6kI4Sw" alt="wallet">
			<p>Total Points Earn</p>
			<p class="amount"></p>
			
			
		</div>

		<div class="btn-group text-center">
			<!--button type="button" class="btn btn-outline-light"   onclick="window.location.href='/Remote/connect/applab/pay';" >Add Money</button-->
			<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#payModal" >WITHDRAW</button>
			</div>
			<style>
                 .btn-outline-light
				 {
				 background-color:#fff ;
						  border: none;
						  color: #000;
						  text-align: center;
						  }
				</style> 
				
			<div class="txn-history">
			
				<p class="bottle"><b>Note *Money will reflected every day at 12:00 midnight</b></p>

						
			
			</div>
               <style>
			   .bottle{
			   	text-align:center;
			   }
			   </style>
			<div class="footer-menu">
				<div class="row text-center">
					<div class="col-md-3">
						<a href="index.php" class="fa fa-home"></a>
						<style>
						         a {
   							 color: #fff;
									}
									
						</style>
						<p>Home</p>
					</div>
                        
					<div class="col-md-3">
						<i class="fa fa-inbox"></i>
						<p>Inbox</p>
					</div>

					<div class="col-md-3">
						<i class="fa fa-university"></i>
						<p>Bank</p>
					</div>

					<div class="col-md-3">
						<i class="fa fa-barcode"></i>
						<p>Scan</p>
					</div>
				</div>
			</div>
</div>
</body>
</html>



<style>

body{
	color :linear-gradient(to right, rgb(255, 239, 186), rgb(255, 255, 255))
}
.wallet-container {
	background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjOvSperRYjHH9-EHlKZJBfwvXy4rJpyerzHQsnp8DuuycYU5_);
		width: 900px;
		height: 100vh;
		color: #fff;
		font-size: 15px;
		padding: 20px 20px 0;
		top: 450%;
		left: 50%;
		transform: translate(-50%,-50%);
		position: absolute;
  
  
}

.page-title {
	text-align: left;
}

.fa-user {
	float: right;
}

.fa-align-left {
	margin-right: 15px;
}

.amount-box img {
	width: 50px;
}

.amount {
	font-size: 35px;
}

.amount-box p {
	margin-top: 10px;
	margin-bottom: -10px;
}

.btn-group {
	margin: 20px 0;
}

.btn-group .btn {
	margin: 8px;
	border-radius: 20px !important;
	font-size: 12px;
}

.txn-history {
	text-align: left;
}

.txn-list {
	background-color: #fff;
	padding: 12px 10px; 
	color: #777;
	font-size: 14px;
	margin: 7px 0;
}

.debit-amount {
	color: red;
	float: right;
}

.credit-amount {
	color: green;
	float: right;

}

.footer-menu {
	margin: 20px -20px 0;
	bottom: 0;
	border-top: 1px solid #ccc;
	padding: 10px 10px 0;
}

.footer-menu p {
	font-size: 12px;
}

@media screen and (max-width: 800px){
  .wallet-container {
    height: 115%;
    bottom: 20px;
    margin-top: 100px;
  }
  
 
}
</style>

<!--MODAL ===----------->


	<style>
.modal-title
{
	color:#000000;
}
 .emailHelp{
  	color:#4d4f53;
  }
  
  .modal-body
  {
  	background:#56a0d3;
  }
  .modal-header
  {
  	background:#003666;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payModalLabel">Withdraw Your Earnings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
        <form action = "request-for-withdrawal.php" method = "POST" >
  <div class="form-group">
    <label for="exampleInputEmail1"><b>EMAIL ADDRESS</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "payemail" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">*End To End Encrypted.</small>
  </div>
  <div class="form-group">
    <label for="Name"><b>NAME</b></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "payname" placeholder="Enter Your's name"required>
  </div>
  <div class="form-group">
    <label for="acnum"><b>A/C NUMBER</b></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "acnum" placeholder="Enter Bank A/C Number"required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>IFSC CODE</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "acifsc" placeholder="Enter Your Bank IFSC Code" required ></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>TOTAL POINTS TO REDEEM  </b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "payamt" placeholder=" 1000 POINTS = 1 $ " required ></textarea>
  </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button  class="btn btn-primary" type="submit" name = "pays" >Withdraw</button>
      </div>

</form>

      </div>
   
    </div>
  </div>
</div>
<!----end Modal---------?-->












<?php include('inc/footer.php');?>