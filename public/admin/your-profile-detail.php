  
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



<?php  
  $q=  "SELECT id , videotitle , videolink, videodate FROM  users_video  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query1 = mysqli_query($con,$q); 
	
$q=  "SELECT id , emaiil , channame, channurl FROM  users_channel  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query = mysqli_query($con,$q); ?>
	
	<!----Blogger Details Fetch -->
	
	<?php
	
	$q=  "SELECT id , blogtitle , bloglink, blogdate FROM  users_blogs  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query2 = mysqli_query($con,$q); 
	
$q=  "SELECT id , emaiil , webname, weburl FROM  users_website  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query3 = mysqli_query($con,$q); ?>
	
	<!----Blogger Details Fetching Ends-----------========-->




<?php include('inc/header.php');?>



<?php include('inc/sidebar.php');?>

  <br>
  
 <?php if($_SESSION['ADMIN_ROLE']==0) { ?>
  <!-- partial -->
        <div class="main-panel">
         <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Profile of <?php echo $_SESSION['ADMIN_USERNAME']?> </h3>
              
            </div>
		
			
			
                  <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <!--p class="card-description"> Add class <code>.table-striped</code>
                    </p---->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
						   <th> ID </th>
                          <th> Channel name </th>
                          <th> Channel URL</th>
                          <!--th> Channel Bio </th--->
                          <th> Status </th>
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

   <td><?php echo $data['emaiil']; ?> </td>
    <td><?php echo $data['channame']; ?> </td>
	    <td> <a href= " <?php echo $data['channurl']; ?>">Subscribe</a> </td>
		 <!--td><?php echo $data['channbio']; ?> </td--->
		<!---td> <button type="button" class="btn btn-danger btn-sm">Delete</button> 
		</td--->
                     </tr>
					 
					  <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
                       
                        
                      </tbody>
					  
					  <?php } ?>
					  <!------============Blogger Profile details==========---------------->
					  
					  <?php if($_SESSION['ADMIN_ROLE']==1) { ?>
					  
					  
					  <!---Stylesheet-------->
					  
					  <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  color: black;
}

</style>
					   <!-- partial -->
        <div class="main-panel">
         <div class="content-wrapper">
			<!---
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Your Blog Details</h4>
					<table class="table table-bordered" id = "pagetable" >
                    <!--table class="table" id = "pagetable"------->
                <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align:center"><?php echo $_SESSION['ADMIN_USERNAME']?> Blog Profile</h4>
                    <!--p class="card-description"> Add class <code>.table-striped</code>
					
                    </p---->
                      <div style="overflow-x:auto;">
  <table class= "table table-bordered">
     <thead>
                        <tr>
						   <th> ID </th>
                          <th> Website name </th>
                          <th> Website URL</th>
                          <!--th> Channel Bio </th--->
                          <th> Status </th>
                        </tr>
                      </thead>
					  <tbody>
					                          <?php
if (mysqli_num_rows($query3) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query3)) 
  {
 ?>
 <tr>

   <td><?php echo $data['emaiil']; ?> </td>
    <td><?php echo $data['webname']; ?> </td>
	    <td> <a href= " <?php echo $data['weburl']; ?>">Visit</a> </td>
	
	<form action = "edit.php" method ="POST">

<input type = "hidden" name = "id" value = " <?php echo $data['id']; ?>">

<td><input type="submit" name = "edit" class = "btn btn-warning" value = "Edit"  ></td>

	</form>
		 <!--td><?php echo $data['channbio']; ?> </td--->
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
			  
			  
			  <!---Blogs You Jave Added Secrion ------>
			  <!----
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Blogs You Have Added</h4>
                   
					<table class="table table-bordered" id = "pagetable" >
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Blog Title </th>
                          <th> BlogLink </th>
                          <!--th> Uploaded On </th>                  
                        </tr>
                      </thead>
                      <tbody>
                        <?php
if (mysqli_num_rows($query2) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query2)) 
  {
 ?>
 
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['blogtitle']; ?> </td>
    <td><a href = "<?php echo $data['bloglink']; ?>">Blog Link</a> </td>
	    <!--td><?php echo $data['blogdate']; ?> </td->
		</tr>
					 
					  <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
                      </tbody>
			<?php } ?>		  
					  
					  <!-----========================---------->
					  			  
                    </table>
                  </div>
                </div>
              </div>
			  </div>
			 <!----StripedTable------>
	 <?php include('inc/footer.php');?>		 