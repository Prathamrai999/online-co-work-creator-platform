 
<?php require('inc/connection.php');
require('inc/function.php');

  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') { 
  }
  else{
   header('location:login.php');
	die();
  }
  
  $condition='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}

  //where add_by ='".$_SESSION['ADMIN_ID']."'..//
 
?>

<?php  
  $q=  "SELECT id , emaiil , channame , channurl , channbio  FROM  users_channel ";

	$query = mysqli_query($con,$q); 
?>


<?php include('inc/header.php');?>
 
 


<?php include('inc/sidebar.php');?>

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
	
			<!----
			 <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-toggle="tab" href="subs.php" role="tab" aria-selected="true">Subscribe</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-toggle="tab" href="task.php" role="tab" aria-selected="true">Daily Task</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                    </li>
                  </ul>
				  </div>
				  </div>
 
 <!----StripedTable------>
		
<style>
#subs{
	text-align:center;
	text-decoration:bold;
}
</style>
			  
      <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" id = "subs">Subscribe This Channels To Complete Your Subscribe Task</h4>
                    <!--p class="card-description"> Add class <code>.table-striped</code>
                    </p---->
                    <table class="table table-bordered" id="pagetable">
                      <thead>
                        <tr>
						   <th> ID </th>
                          <th> Channel name </th>
                          <th> Channel URL</th>
                          <!--th> Channel Bio </th--->
                          <th> Category </th>
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
    <td><?php echo $data['channame']; ?> </td>
	    <td> <a href= " <?php echo $data['channurl']; ?>">Subscribe</a> </td>
		  <td><?php echo $data['channbio']; ?> </td>
		<!---td> <button type="button" class="btn btn-danger btn-sm">Delete</button> 
		</td--->
                     </tr>
					 
					  <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			  </div>
			           <!-- content-wrapper ends -->
					   
					 
			</div>  
				  </div>
                </div>
        <?php include('inc/footer.php');?>