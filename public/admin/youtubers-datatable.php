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
  $q=  " select * FROM  users_channel ";

	$query = mysqli_query($con,$q);
	
	
	//$p=  "SELECT id , blogtitle , bloglink, blogdate FROM  users_blogs  where add_by='".$_SESSION['ADMIN_ID']."'";

	//$query1 = mysqli_query($con,$p);
	
	
	 ?>

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
			<div style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th--- >
                          <th> Email </th>
                          <th> Channel </th>
                          <th> Channel URL </th>
						  <th> Added By </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
					  <tr>
					  <?php
if (mysqli_num_rows($query) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query)) 
  {
 ?>
					  <td><?php echo $data['id']; ?> </td>
					  <td><?php echo $data['emaiil']; ?> </td>
					 <td><?php echo $data['channame']; ?> </td>
					 <td><a href = "<?php echo $data['channurl']; ?>">Link</a> </td>
					 <!--td><?php echo $data['channbio']; ?> </td=====--->
					
					 <td><?php echo $data['add_by']; ?> </td>
					 <td><?php echo $data['id']; ?> </td>
					
					  </tr>
					   <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
					  </tbody>
                    </table>
					</div>
			</div>
			
			<?php include('inc/footer.php');?>