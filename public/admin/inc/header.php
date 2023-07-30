<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"-->
  
  <!-- include summernote css/js -->
       <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!--div class="search-field d-none d-xl-block">
            <!--form class="d-flex align-items-center h-100" action="#"-->
              <!--div class="input-group"-->
			  
                <!--div class="input-group-prepend bg-transparent"-->
				 <!--p class="mb-1 text-black">WELCOME BACK <?php echo $_SESSION['ADMIN_USERNAME']?></p>
                  <!--i class="input-group-text border-0 mdi mdi-magnify"></i-->
                <!--/div-->
                <!--input type="text" class="form-control bg-transparent border-0" placeholder="Search products"--->
              <!--/div--->
            <!--/form--->
          <!--/div-->
		  <ul class="navbar-nav navbar-nav-right">
		  <?php if($_SESSION['ADMIN_ROLE'] ==0 || $_SESSION['ADMIN_ROLE']==1 ) { ?>
          
            <li class="nav-item">
			 <a class="nav-link" href="refer-and-earn.php" id="wallm">Refer &amp Earn&nbsp<i class="fa-solid fa-sack-dollar fa-beat-fade fa-sm" id ="hellp"></i></a>
			</li>
			<style>
			#wallm{
			color:#00112c;
			font-size:16px;

			}
			
			#hellp{
				color:#fbb034;
			}
			</style>
			
			
			<?php } ; ?>
              <!--div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc </a>
              </div>
            </li-->
			  <!---li class="nav-item nav-language dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="languageDropdown" href="your-wallet.php"  aria-expanded="false">
                <div class="nav-language-icon">
                  <i class="coin-icon flag-icon-us" title="us" id="us"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">Wallet</p>
                </div>
              </a>
			----------->
			
			
            <!--- class="nav-item  dropdown d-none d-md-block">

              <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown" aria-expanded="false">Profile</a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                <a class="dropdown-item" href="your-profile-detail.php">
                  <i class="mdi mdi-eye-outline mr-2"></i>View Your Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="edit-your-profile.php">
                  <i class="mdi mdi-pencil-outline mr-2"></i>Edit Your Profile </a>
              </div>
            </li>
          
              <!--div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="#">
              
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="nav-language-icon mr-2">
                    <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                  </div>
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">English</p>
                  </div>
                </a>
              </div--->
            <!--/li--->
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['ADMIN_USERNAME']?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
				   <?php if($_SESSION['ADMIN_ROLE'] ==0 || $_SESSION['ADMIN_ROLE']==1 ) { ?>
				     <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="your-profile-detail.php">
                    <span> View Profile</span>
                    <span class="p-0">
               
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
				  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="edit-your-profile.php">
                    <span>Edit Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success"></span>
                      <i class="fa-solid fa-user-pen"></i>
                    </span>
                  </a>
                  
               
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
				  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="refer-and-earn.php">
                    <span>Wallet</span>
                    <span class="p-0">
                      <span class="badge badge-primary"></span>
                      <i class="fa-solid fa-wallet fa-beat-fade fa-sm"></i>
                    </span>
                  </a>
				  <?php } ;?>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Delete Account</span>
                   <i class="fa-solid fa-trash-can"></i>
                  </a>
				  
                 
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="logout.php">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
				</ul>
              </div>
           
                <!---div class="dropdown-divider"></div>
                <!--a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <!--div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a--->
      </nav>
    
    <!-- Required meta tags 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
	/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>