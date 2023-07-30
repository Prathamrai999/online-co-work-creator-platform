  
<?php require('inc/connection.php');
require('inc/function.php');

$condition='';
if($_SESSION['ADMIN_ROLE'] == 2  ){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}


  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') { 
  }
  else{
   header('location:login.php');
	die();
  }
  
   $q=  "SELECT * FROM  users_call_schedule ";

	$query = mysqli_query($con,$q); ?>



<?php include('inc/header.php');?>



<?php include('inc/sidebar.php');?>


<?php if($_SESSION['ADMIN_ROLE']==2) { ?>
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
				                <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Who Requested Call Back</h4>
					
                    <!--p class="card-description"> Add class <code>.table-{color}</code>
                    </p-->
                    <table class="table table-bordered" id="pagetable" >
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Number </th>
						   <th> Time </th>
                          
                        </tr>
                      </thead>
                      <tbody>
					  <?php
if (mysqli_num_rows($query) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query)) 
  {
 ?>
 
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['namef']; ?> </td>
    <td><?php echo $data['mail']; ?></td>
	    <td><?php echo $data['numberc']; ?> </td>
		<td><?php echo $data['time']; ?> </td>
  </tr>
					 
					  <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
                      </tbody>
                    </table>
				
				
	
<?php if($_SESSION['ADMIN_ROLE']==0) {

echo "ACCESS DENIED 391";
exit();
}

?>			
			
                  </div>
                </div>
              </div>
			
			  
			  	 <?php include('inc/footer.php');?>		
				 
				 <?php } ?>	