<?php   

require('inc/connection.php');
require('inc/function.php');
$msg='';

if (isset($_POST['submit']))
{
	$fname= get_safe_value($con,$_POST['fname']);
	$emailid= get_safe_value($con,$_POST['emailid']);
	$telephone= get_safe_value($con,$_POST['telephone']);
   	$subject= get_safe_value($con,$_POST['subject']);



$q=  "INSERT INTO users_query(fname,emailid,telephone,subject) VALUES('$fname','$emailid','$telephone','$subject')";

	$query = mysqli_query($con,$q);
	
	if(!$query)
	{
die('Error: ' . mysqli_error($con));
}
	
	else
	{
	
	     $_SESSION['status']='Query Raised Successfully ! We will Contact You Soon'
		 header("fill-the-support-query-form.php");
	}	

	}


?>



<body class="page">
    <main class="main page__main">
        <form class="form main__form" action="fill-the-support-query-form.php" method="POST">
            <div class="form__linput"><label class="form__label" for="fname">First Name</label><input class="form__input" type="text" id="fname" name="fname" placeholder="Your name..." /></div>
            <div class="form__linput"><label class="form__label" for="lname">Email Address</label><input class="form__input" type="text" id="lname" name="emailid" placeholder="Your Email address..." /></div>
 <div class="form__linput"><label class="form__label" for="lname">Mobile Number</label><input class="form__input" type="text" id="lname" name="telephone" placeholder="Your contact number" /></div>
               
            <div class="form__linput"><label class="form__label" for="subject">Subject</label><textarea class="form__textarea" id="subjects" name="subject" placeholder="Write something.." rows="7"></textarea></div>
			<button class="primary-btn form__btn" type="submit" name="submit">Submit</button>
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

