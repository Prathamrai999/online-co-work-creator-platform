
									<!--- Line 61 - Super Admin Code Begins 
									      Line 100 - Main Admin Code Begins
										  Line 166 - Blogger Code Begins 
									      Line 416 - Youtuber Code Begins ---------->
	  
<?php require('inc/connection.php');
require('inc/function.php');

$condition='';
if($_SESSION['ADMIN_ROLE'] ==1  ){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}


  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') 
  { 
  
  }
  else{
   header('location:login.php');
	die();
  }
 
 
?>





<?php include('inc/header.php');?>



<?php include('inc/sidebar.php');?>

<?php  
  $q=  "SELECT id , videotitle , videolink, videodate FROM  users_video  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query = mysqli_query($con,$q);
	
	
	$p=  "SELECT id , blogtitle , bloglink, blogdate FROM  users_blogs  where add_by='".$_SESSION['ADMIN_ID']."'";

	$query1 = mysqli_query($con,$p);
	
	$p=  "SELECT * FROM  admin_users ";

	$mainquery23 = mysqli_query($con,$p);
	
	
	 ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Like what you see? Check out our premium version for more.</p>
                  <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                  <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                  <!--i class="mdi mdi-close" id="bannerClose"></i--->
                </span>
				
              </div>
            </div>
				<?php if($_SESSION['ADMIN_ROLE']==2) { ?>
				
				<!--
				<button type="button" class="btn btn-primary" id= "btnchannel" data-toggle="modal" data-target="#channelModal">
 <a href="superadmin-page.php">ALL Users Data</a> 
</button>
 Button trigger modal 
<button type="button" class="btn btn-primary" id= "btnvideo" data-toggle="modal" data-target="#videoModal">
  List Your Videos
</button>

---->
<div class="card">
  <h5 class="card-header">See All Call Scheduled Queries</h5>
  <div class="card-body">
    <h5 class="card-title">All Calls Schedules By Users</h5>
    <!--p class="card-text">With supporting text below as a natural lead-in to additional content.</p-->
    <a href="superadmin-call-queries.php" class="btn btn-primary">Call Queries</a>
  </div>
  <h5 class="card-header">See All User Queries Raised</h5>
  <div class="card-body">
    <h5 class="card-title">All Queries Raised By Users</h5>
    <!--p class="card-text">With supporting text below as a natural lead-in to additional content.</p-->
    <a href="superadmin-queries-raised.php" class="btn btn-primary">Queries</a>
  </div>
  
</div>
	
				<?php } ?>
			
			<!----
			 <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
               
				  <!---Error Messages-------->
				  
				  <?php if($_SESSION['ADMIN_ROLE']==3) { ?>
				  
				  
  
  <!---Users Table Data----->
  <div class = "fresh" style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Username </th>
                          <th> Password </th>
						  <!--th> Bio </th--->
						  <th> Role </th>
						  <th> Created On </th>
                          <th> Login Time </th>
							<th> Logout Time </th>
							<th> Verified </th>
							<th> status</th>
                        </tr>
                      </thead>
                      <tbody>
					  <tr>
					  <?php
if (mysqli_num_rows($mainquery23) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($mainquery23)) 
  {
 ?>
					  <td><?php echo $data['id']; ?> </td>
					  <td><?php echo $data['username']; ?> </td>
					    <td><?php echo $data['password']; ?> </td>
					   <td><?php echo $data['role']; ?> </td>
					 <td><?php echo $data['created_at']; ?> </td>
					 <td><?php echo $data['last_login']; ?> </td>
					 <!--td><?php echo $data['channbio']; ?> </td=====--->
					 <td><?php echo $data['logouttime']; ?> </td>
					 <td><?php echo $data['verify_status']; ?> </td>
					 <form action = "deactivate.php" method = "POST">
					<td><input type = "hidden" name = "id" value = " <?php echo $data['id']; ?>">
<input type="submit" name = "deacti" class = "btn btn-warning" value = "Deactivate">
</td></form>

</tr>
					   <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
					  </tbody>
                    </table>
					</div>
  
  
  <!--===============------>
  				  
				  
				  
				  
				<?php } ?>  
				  
				  
				  <?php if($_SESSION['ADMIN_ROLE']==1) { ?>
				  
				  
				  
				  
				  <!-----Ends MainAdmin------->
				  <?php
	if(isset($_SESSION['over']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>OOPS!</strong> <?php echo $_SESSION['over']; ?>
	</div>
	<?php
	}
	unset($_SESSION['over']);
	?>
				  <!-- Button trigger modal -->
					
	<div class = "kissan" id = "jam" >				
<button type="button" class="btn btn-primary btn-md" id= "btnchannel" data-toggle="modal" data-target="#webModal">
  Add Your Website
</button>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-md " id= "btnvideo" data-toggle="modal" data-target="#blogModal">
  List Your Blogs
</button>

</div>

<!--Blogger Section --->


					  <style>
					  
  .kissan
  {
  	text-align: center;
	top:48% ;
	
	}
	
	.fresh
	{
		top:70%;
	}
  
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

#btnvideo {
	float: right ;
	
}

#btnchannel
{
	float: left ;
}


</style>
			
<!-- Modal -->
<div class="modal fade" id="webModal" tabindex="-1" role="dialog" aria-labelledby="channelModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="webModalLabel">Enter Website Basic Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
        <form action = "blog-detail-submitted.php" method = "POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "emaiil" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="websitename">Website Name</label>
    <input type="text" class="form-control" id="websitename" name = "webname" placeholder="Website name"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Website URL</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "weburl" placeholder="URL"required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Blog Category</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name = "webbio" placeholder="eg: News , tech , Entertainment etc" required ></textarea>
  </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name = "submitts" >Save changes</button>
      </div>

</form>

      </div>
   
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="blogModalLabel">Provide Blogs Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form action = "blog-detail-submitted.php" method = "POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "blogtitle" placeholder="Blog Title"required>
    <small id="emailHelp" class="form-text text-muted">Please keep Title Short.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Blog Link/URL</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "bloglink"  placeholder="Blog Link or URL"required>
  </div>
    <!--div class="form-group">
    <label for="exampleInputPassword1">Video Link/URL</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "videodate"  placeholder="Enter Today's Date in DD/MM/YY"required>
  </div--->
  
  
   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit"  name = "submitt" >Save changes</button>
      </div>
</form>

      </div>
     
    </div>
  </div>
</div>
				  
		<!------>		

  <!-----div for modal ends------->
        
				                <div class="col-lg-12 stretch-card">
                <div class="card">
				<?php
	if(isset($_SESSION['success']))
	{
	?>
	<div class="alert alert-dark">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
	</div>
	<?php
	}
	unset($_SESSION['success']);
	?>
                  <div class="card-body">
                    <h4 class="card-title">Blogs You have Uploaded</h4>
								<?php
	if(isset($_SESSION['blog']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>OOPS !</strong> <?php echo $_SESSION['blog']; ?>
	</div>
	<?php
	}
	unset($_SESSION['blog']);
	?>
                    <!--p class="card-description"> Add class <code>.table-{color}</code>
                    </p-->
					<div class = "fresh" style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th--- >
                          <th> Blog Title </th>
                          <th> Blog Link </th>
                          <th> Uploaded On </th>
                          <th> Status </th>
                        </tr>
                      </thead>
                      <tbody>
					  
					 
                         <?php
if (mysqli_num_rows($query1) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query1)) 
  {
 ?>
 
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['blogtitle']; ?> </td>
    <td><a  href = "<?php echo $data['bloglink']; ?>">Blog Link</a> </td>
	    <td><?php echo $data['blogdate']; ?> </td>
		
		
<!--form action = "delete.php" method ="POST"-->
<td>
<input type = "hidden"  class = "delete_id_value" value = " <?php echo $data['id']; ?>">
<a href= "javascript:void(0)" class = "delete_btn_ajax btn btn-danger">Delete</a>
</td>

<!--input type = "hidden" name = "id" value = " <?php echo $data['id']; ?>"--->

<!--td><input type="submit" name = "delete1" class = "btn btn-danger" value = "Delete"  ></td--->

<!--/form--->
		<!--td> <button type="button" class="btn btn-danger btn-sm">Delete</button> 
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
				    




<?php }  ?>


<?php if($_SESSION['ADMIN_ROLE']==0) { ?>

<!---Example----->
<button type="button" class="btn btn-primary" id= "btnchannel" data-toggle="modal" data-target="#channelModal">
  Add Your Channel
</button>

<style>
 .btn-primary
 {
 border: none;
  color: white;
  padding: 12px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 5px 2px;
  cursor: pointer;
  }
</style>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp
&nbsp

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id= "btnvideo" data-toggle="modal" data-target="#videoModal">
  List Your Videos
</button>
<br>


<!-- Modal -->
<div class="modal fade" id="channelModal" tabindex="-1" role="dialog" aria-labelledby="channelModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="channelModalLabel">Enter Channel Basic Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
        <form action = "channel-detail-submitted.php" method = "POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "emaiil" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Channel Name</label>
    <input type=text" class="form-control" id="exampleInputPassword1" name = "channame" placeholder="Channel name"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Channel URL</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "channurl" placeholder="URL"required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Channel Category</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "channbio" placeholder="eg: comedy , tech , gaming etc" required ></textarea>
  </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name = "submit" >Save changes</button>
      </div>

</form>

      </div>
   
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Provide Videos Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form action = "video-data-submitted.php" method = "POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Video Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "videotitle" placeholder="Video Title"required>
    <small id="emailHelp" class="form-text text-muted">Please keep Title Short.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Video Link/URL</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "videolink"  placeholder="Video Link or URL"required>
  </div>
    <!--div class="form-group">
    <label for="exampleInputPassword1">Video Link/URL</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "videodate"  placeholder="Enter Today's Date in DD/MM/YY"required>
  </div--->
  
  
   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit"  name = "submit" >Save changes</button>
      </div>
</form>

      </div>
     
    </div>
  </div>
</div>
				  
		<!------>		  
				
         
			  <!-----div for modal ends------->
        
				                <div class="col-lg-12 stretch-card">
                <div class="card">
				<!----Error Messages------>
				 <?php
	if(isset($_SESSION['game']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>OOPS!</strong> <?php echo $_SESSION['game']; ?>
	</div>
	<?php
	}
	unset($_SESSION['game']);
	?>
				
				
				<!----Error Messages Ends----->
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
	?>
	
                  <div class="card-body">
                    <h4 class="card-title">Video You have Uploaded</h4>
								<?php
	if(isset($_SESSION['vilimit']))
	{
	?>
	<div class="alert alert-danger">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>OOPS !</strong> <?php echo $_SESSION['vilimit']; ?>
	</div>
	<?php
	}
	unset($_SESSION['vilimit']);
	?>
                    <!--p class="card-description"> Add class <code>.table-{color}</code>
                    </p-->
					<div style="overflow-x:auto;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Video Title </th>
                          <th> Video Link </th>
                          <th> Uploaded On </th>
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
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['videotitle']; ?> </td>
    <td><a id= "click"href = "<?php echo $data['videolink']; ?>">Video Link</a> </td>
	    <td><?php echo $data['videodate']; ?> </td>
		
		
<!--form action = "delete.php" method ="POST"--->
<td><a href= "javascript:void(0)"  class = "delete_btn_ajax1 btn btn-danger">Delete</a></td>
<input type = "hidden"  class = "delete_id_val" value = " <?php echo $data['id']; ?>">

<!--><input type="submit" name = "delete" class = "delete_btn_ajax btn btn-danger" value = "Delete"  ></td--->

		<!--td> <button type="button" class="btn btn-danger btn-sm">Delete</button> 
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
			  <!---Click Function implementation trying ------>
			  
			
			  
			  <!--click functione ends here ----------->
			  
			  
				    

			
			<?php } ?>
			
			</div>  
				  </div>
                </div>
			
        <?php include('inc/footer.php');?>