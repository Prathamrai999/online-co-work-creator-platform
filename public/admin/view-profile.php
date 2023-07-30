<?php include('inc/connection.php');

$q="SELECT name,email,number,zipcode,state,address,bio,skills,experience,salary FROM profile";
$result = mysqli_query($con, $q);
?>

<?php include('inc/header.php');?>

<?php include('inc/sidebar.php');?>


<?php include('inc/footer.php');?>
 
