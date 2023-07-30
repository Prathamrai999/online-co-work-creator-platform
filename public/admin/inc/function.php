<?php

function pr($arr){
	echo '<pre';
	print_r($arr);
}

function prx()
{
echo '<pre';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
if(($str!=''))
{
	return mysqli_real_escape_string($con,$str);
}
}

function isAdmin(){
	if ($_SESSION['ADMIN_ROLE']==1){
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}




?>