
<?php require('inc/connection.php');
require('inc/function.php');

$condition='';
if($_SESSION['ADMIN_ROLE'] ==1  ){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}


  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') { 
  }
  else{
   header('location:login.php');
	die();
  }
 
 
?>





<?php include('inc/header.php');?>



<?php include('inc/sidebar.php');?>

<?php  
  $pay_mainq=  "Select * from pay_details";

	$main_pay_memquery = mysqli_query($con,$pay_mainq);
	?>

<?php if($_SESSION['ADMIN_ROLE']==3) { ?>
				  
		  <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Like what you see? Check out our premium version for more.</p>
                  <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                  <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div>		  
  
  <!---Users Table Data----->
  <div style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
						  <!--th> Bio </th--->
						  <th> Number </th>
						  <th> Status </th>
                          <th> PaymentId </th>
						  <th> Added On  </th>	
                        </tr>
                      </thead>
                      <tbody>
					  <tr>
					  <?php
if (mysqli_num_rows($main_pay_memquery) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($main_pay_memquery)) 
  {
 ?>
					  <td><?php echo $data['id']; ?> </td>
					  <td><?php echo $data['name']; ?> </td>
					    <td><?php echo $data['email']; ?> </td>
					   <td><?php echo $data['number']; ?> </td>
					 <td><?php echo $data['payment_status']; ?> </td>
					 <td><?php echo $data['payment_id']; ?> </td>
					 <!--td><?php echo $data['channbio']; ?> </td=====--->
					 <td><?php echo $data['added_on']; ?> </td>
					 
					
					  </tr>
					   <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
					  </tbody>
                    </table>
					</div>
  </div>
  
  <!--===============------>
  				  
				  
				  
				  
				<?php } ?>  
				  
				   
			
        <?php include('inc/footer.php');?>