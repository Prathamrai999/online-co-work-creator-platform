<?php
 session_start();
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "water";
    $con=mysqli_connect($servername,$username,$password,$dbname);

 if(!$con)
 {
 	die('connection failed'. mysqli_connect_error);
 }
   
?>