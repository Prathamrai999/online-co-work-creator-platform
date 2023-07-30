<?php
require('inc/connection.php');
require('inc/function.php');

$condition='';
if($_SESSION['ADMIN_ROLE']==1){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}

$msg='';

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




$q=  "SELECT name,email,number,zipcode,state,address,bio,skills,experience,salary,resume  FROM profile  where add_by_id='".$_SESSION['ADMIN_ID']."' ";

	$query = mysqli_query($con,$q);
?>
<form>
 <?php
if (mysqli_num_rows($query) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($query)) 
  {
 ?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">

        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Personal Details</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder=""  id="dark" value="<?php echo $data['name']; ?> " readonly></div>
                    <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" value="<?php echo $data['email']; ?>"  id="dark" placeholder=""readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder=""  id="dark" value="<?php echo $data['number']; ?>"readonly></div>
                    <div class="col-md-12"><label class="labels">Zipcode</label><input type="text" class="form-control" placeholder=""  id="dark" value="<?php echo $data['zipcode']; ?>"readonly></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder=""  id="dark" value="<?php echo $data['state']; ?>"readonly></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder=""  id="dark" value="<?php echo $data['address']; ?>"readonly></div>
                    <div class="col-md-12"><label class="labels">Expected Salary</label><input type="text" class="form-control"  id="dark" placeholder="" value="<?php echo $data['salary']; ?>"readonly></div>
                    <div class="col-md-12"><label class="labels">Previous Experience</label><input type="text"  id="dark" class="form-control" placeholder="" value="<?php echo $data['experience']; ?>"readonly></div>
					 <div class="col-md-12"><label class="labels"></label><input type="file"  id="dark" class="form-control" placeholder="" value="<?php echo $data['resume']; ?>"readonly></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>About</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Skills Details</label><textarea class="form-control"  id="dark" rows="5" name="bio" value="<?php echo $data['bio']; ?>"readonly ></textarea></div> <br>
                <div class="col-md-12"><label class="labels">Your Bio</label><textarea class="form-control"  id="dark" rows="5" name="skills" value="<?php echo $data['skills']; ?>" readonly></textarea></div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</form>
 <?php
  $sn++;}} else { ?>
    <p>No data found</p>
 
 <?php } ?>
<style>
/*body {
    background: rgb(99, 39, 120)
}
*/

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 18px;
	 color:#000;
}
#dark{
			 border: 2px solid #555;
		}
.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

               <?php include('inc/footer.php');?>   