<?php

require('inc/connection.php');
require('inc/function.php');
$msg='';
$condition='';
if($_SESSION['ADMIN_ROLE'] == 2  ){
	$condition=" and add_by_id='".$_SESSION['ADMIN_ID']."'";
}


  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!='') { 
  }
  else{
   header('location:login.php');
	die();
  }
if (isset($_POST['submit']))
{
	$namef= get_safe_value($con,$_POST['namef']);
	$mail= get_safe_value($con,$_POST['mail']);
	$numberc= get_safe_value($con,$_POST['numberc']);
   	$time= get_safe_value($con,$_POST['time']);
	   	$subject= get_safe_value($con,$_POST['subject']);



$q=  "INSERT INTO users_call_schedule (namef,mail,numberc,time,subject) VALUES('$namef','$mail','$numberc','$time','$subject')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
	
	     $_SESSION['status']='Query Raised Successfully ! We will Contact You Soon';
		 header("location:schedule-a-call-support.php");
	}	

	}

;

?>















<body class="page">
    <main class="main page__main">
        <form class="form main__form" action="schedule-a-call-support.php" method="POST">
            <div class="form__linput"><label class="form__label" for="fname">First Name</label><input class="form__input" type="text" id="fname" name="namef" placeholder="Your name..." /></div>
            <div class="form__linput"><label class="form__label" for="lname">Email Address</label><input class="form__input" type="text" id="lname" name="mail" placeholder="Your Email address..." /></div>
 <div class="form__linput"><label class="form__label" for="lname">Contact Number</label><input class="form__input" type="text" id="lname" name="numberc" placeholder="Your contact number" /></div>
               <div class="form__linput"><label class="form__label" for="lname">Select a Time</label><input class="form__input" type="time" id="time" name="time" placeholder="Schedule a Time" /></div>
            <div class="form__linput"><label class="form__label" for="subject">Subject</label><textarea class="form__textarea" id="subject" name="subject" placeholder="Write something.." rows="7"></textarea></div><button class="primary-btn form__btn" name="submit" type="submit">Submit</button>
        </form>
    </main>
</body>

<style>
@import "https://unpkg.com/open-props";
*,
*::before,
*::after {
  box-sizing: border-box; }

button {
  font: inherit; }

.page {
  color: var(--gray-9);
  background-color: var(--gray-0);
  display: grid;
  grid-template-areas: "main";
  min-height: 100vh;
  font-family: var(--font-sans); }
  .page__mani {
    grid-area: main; }

.main {
  display: grid;
  justify-items: center;
  align-items: center;
  padding: var(--size-3); }
  .main__form {
    max-width: 30em; }

.form {
  color: var(--gray-9);
  background-color: var(--gray-3);
  display: grid;
  padding: var(--size-4);
  width: 100%;
  border: 1px solid var(--gray-4);
    border-radius: var(--radius-2); }
  .form__linput {
    display: grid;
    margin-bottom: var(--size-3); }
  .form__label {
    margin-bottom: var(--size-2); }
  .form__input, .form__select {
    padding: 1em 0.7rem;
    border: 1px solid var(--gray-4);
      border-radius: var(--radius-2); }
  .form__select {
    background: inherit; }
  .form__textarea {
    padding: 1em 0.7rem;
    resize: vertical;
    border: 1px solid var(--gray-4);
      border-radius: var(--radius-2);
    font: inherit; }
  .form__btn {
    margin-right: auto; }

.primary-btn {
  transition: 180ms ease-in;
  color: var(--gray-0);
  background-color: var(--green-9);
  padding: 0.7em var(--size-3);
  border: 0;
    border-radius: var(--radius-2);
  cursor: pointer; }
  .primary-btn:hover {
    background-color: var(--green-6); }

</style>