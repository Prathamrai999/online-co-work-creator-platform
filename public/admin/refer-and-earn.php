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

<body>

<div class="wallet-container text-center">
		<p class="page-title"><i class="fa fa-align-left"></i>My E-wallet<i class="fa fa-user"></i></p>

		<div class="amount-box text-center">
		<!---Successs Or Error Message ------>
		
		 <?php
	if(isset($_SESSION['succe']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Success!</strong> <?php echo $_SESSION['succe']; ?>
	</div>
	<?php
	}
	unset($_SESSION['succe']);
	?>
	
	<?php
	if(isset($_SESSION['fail']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>OOPS!</strong> <?php echo $_SESSION['fail']; ?>
	</div>
	<?php
	}
	unset($_SESSION['fail']);
	?>
		<!----Ends Message------>
			<img src="https://lh3.googleusercontent.com/ohLHGNvMvQjOcmRpL4rjS3YQlcpO0D_80jJpJ-QA7-fQln9p3n7BAnqu3mxQ6kI4Sw" alt="wallet">
			<p class= "see">Total Points</p>
			<p class="amount" id = "current-balance" ><?php echo "$row[referpoint]";?></p>
		</div>

		<div class="btn-group text-center">
			<button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#payModal">Withdraw</button>
			
			</div>

			<div class="txn-history">
				<p class = "paper"><b class = "extra">Refer Your Friend &amp get 100 Points on their Sign Up</b></p>
				<!--p class="txn-list"><span class="debit-amount">-$100</span></p---->

				<!--p class="txn-list">Payment to abc shop<span class="debit-amount">-$150</span></p==-->

				<p class="txn-list"><b>REFERRAL LINK - </b><span class="credit-amount">	<?php echo " <a href = 'http://localhost/remote/connect/applab/admin/?refer=$row[refercode]'>http://localhost/remote/connect/applab/admin/?refer=$row[refercode]</a>";?></span></p>

				<p class="txn-list"><b>REFERRAL CODE - </b><span class="credit-amount"><?php echo "$row[refercode]";?></span></p>
			</div>

			<div class="footer-menu">
				<div class="row text-center">
					<div class="col-md-3">
						<i class="fa fa-home"></i>
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





<style>

a{
	color:#000 ;
}

.see{
	font-size : 24px;
}

.extra
{
animation: animate 
                1.5s linear infinite;
				}
				@keyframes animate 
				{
             0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
        }
.paper
{
	text-align:center;
	font-size:22px ;
	
}
.wallet-container {
	background:linear-gradient(to right, rgb(21, 153, 87), rgb(21, 87, 153))
	,url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjOvSperRYjHH9-EHlKZJBfwvXy4rJpyerzHQsnp8DuuycYU5_);
		width: 95%;
		color: #fff;
		font-size: 15px;
		padding: 20px 20px 0;
		top: 55%;
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
	font-size: 16px;
}

.txn-history {
	text-align: left;
}

.txn-list {
	background-color: #fff;
	padding: 12px 10px; 
	color: #248bcc;
	font-size: 18px;
	margin: 7px 0;
	text-decoration:bold;
}


.credit-amount {
	color: green;
	

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

@media screen and (max-width: 750px){
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
  .ear
  {
  	color : #000 ;
  }
  
  .taken
  {
  	color : #000 ;
	font-size: 15px ;
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
    <label for="exampleInputEmail1"><b class = "ear">EMAIL ADDRESS</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "payemail" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="Name"><b class = "ear">NAME</b></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "payname" placeholder="Enter Your's name"required>
  </div>
  <div class="form-group">
    <label for="acnum"><b class = "ear">A/C NUMBER</b></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "acnum" placeholder="Enter Bank A/C Number"required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><b class = "ear">IFSC CODE</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "acifsc" placeholder="Enter Your Bank IFSC Code" required ></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1"><b class = "ear">TOTAL POINTS TO REDEEM  </b></label>
    <textarea class="form-control" id="withdraw-amount" rows="1" name = "payamt" placeholder=" 1000 POINTS = 1 $ " required ></textarea>
  </div>
    <p class = "taken">*Amount credited within 24 hours*</p>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
        <button  class="btn btn-primary btn-md" id = "withdraw-btn" type="submit" name = "pays" >Withdraw</button>
      </div>
	  
	

</form>

      </div>
   
    </div>
  </div>
</div>
<!----end Modal---------?-->
<!---Script For Withdrawal ------------
<script>

 //withdraw button event handler
         const withdraw_btn = document.getElementById('withdraw-btn');
         withdraw_btn.addEventListener('click', function(){
            const withdrawNumb = getInputNumb("withdraw-amount");

            updateSpanTest("current-withdraw", withdrawNumb);
            updateSpanTest("current-balance", -1 * withdrawNumb);
            //setting up the input field blank when clicked
            document.getElementById('withdraw-amount').value = "";
        })

        //function to parse string input to int   
        function getInputNumb(idName){
            const amount = document.getElementById(idName).value;
            const amountNumber = parseFloat(amount);
            return amountNumber;
        }

        function updateSpanTest(idName, addedNumber){
            //x1.1 updating balance the same way
            const current = document.getElementById(idName).innerText;
            const currentStringToInt = parseFloat(current);

            const total = currentStringToInt + addedNumber;

            //x1.2 setting this value in balance
            document.getElementById(idName).innerText = total;
        }

</script>

<!----Script Ends ---------------->



<?php include('inc/footer.php');?>