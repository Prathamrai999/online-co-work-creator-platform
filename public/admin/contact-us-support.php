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





<?php include('inc/header.php');?>
<link href="../assets/css/theme.css" rel="stylesheet" />





 <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5">

        <div class="container">
          <!--div class="row align-items-center mb-6">
            <!--div class="col-md-5 col-lg-4 offset-lg-1">
              <h1 class="fw-bold lh-base">Smart jackpots that you may love this anytime &amp; anywhere</h1>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
              <p class="mb-0">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
            </div>----->
          <!--/div--->
          <div class="row">
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="../assets/img/illustrations/automatic.png" width="90" alt="" /></div>
             <a href=""><h5 class="fw-bold text-danger">Chat With US</h5></a>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="../assets/img/illustrations/network.png" width="90" alt="" /></div>
              <a href="fill-the-support-query-form.php"><h5 class="fw-bold text-primary">Fill Up a Contact Form</h5></a>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
            <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
              <div class="py-4"><img class="img-fluid" src="../assets/img/illustrations/rewards.png" width="90" alt="" /></div>
              <a href="schedule-a-call-support.php"><h5 class="fw-bold text-success">Schedule a Call</h5></a>
              <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
            </div>
          </div>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



  <!-- content-wrapper ends -->
        <?php include('inc/footer.php');?>