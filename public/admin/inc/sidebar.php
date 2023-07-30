     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
	
  <!-- partial====--->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
			<?php if($_SESSION['ADMIN_TYPE']==0) { ?>
				
            <li class="nav-item">
              <a class="nav-link"  href="task.php">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Videos Task</span>
                <!--i class="menu-arrow"></i--->
              </a>
              <!--div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="script.php">Daily Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view.php">Subscribe Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Upload Resume</a></li>
                </ul>
              </div--->
            </li>
			<li class="nav-item">
              <a class="nav-link"  href="read-blogs.php">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Read Blogs</span>
                <!--i class="menu-arrow"></i--->
              </a>
              <!--div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="script.php">Daily Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view.php">Subscribe Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Upload Resume</a></li>
                </ul>
              </div--->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="subs.php">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Subscribe Task</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Insights</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us-support.php">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">Contact Us</span>
                <!--i class="menu-arrow"></i--->
              </a>
              <!---div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div---->
            </li>
			<?php } ?>
        
					<?php if($_SESSION['ADMIN_TYPE']==2) { ?>
            <li class="nav-item">
              <a class="nav-link" href="youtubers-datatable.php">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Youtuber Data</span>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="users-videos-datatable.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Users Video Data</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users-blogs-datatable.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Users Blogs Data</span>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="bloggers-datatable.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Blogger Data</span>
              </a>
			
            </li>
            <?php } ?>
			
	        
					<?php if($_SESSION['ADMIN_TYPE']==3) { ?>
            <li class="nav-item">
              <a class="nav-link" href="payment-data-menmbers.php">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Membership Data</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users-wallet-balance.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Users Wallet Data</span>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="withdrawal-users-data.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Withdrawal Request Data</span>
              </a>
            </li>
            <?php } ?>
			
			
			    <li class="nav-item documentation-link">
              <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html" target="_blank">
                <span class="icon-bg">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                </span>
                <span class="menu-title">Become a Member</span>
              </a>
            </li>
			
					
			
			
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src="assets/images/faces/face28.png" alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $_SESSION['ADMIN_USERNAME']?></p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger">3</div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                  <span class="menu-title">Tutorial</span></a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->