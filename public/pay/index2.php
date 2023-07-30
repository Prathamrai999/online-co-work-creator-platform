
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
<div class="container">
    <h1 class="header">Payment Form</h1>
    <p class="mock">Please fill Details in the Form Correctly</p>
	<hr>
<input type = "textbox" name = "name" id = "name" placeholder="Enter Your Name"/><br></br>
<!--input type = "textbox" name = "amt" id = "amt" placeholder="Enter Amount"/><br></br--->
<input type = "textbox" name = "email" id = "email" placeholder="Enter Email "/><br></br>
<input type = "textbox" name = "number" id = "number" placeholder="Enter Contact Number"/><br></br>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<input type = "button" name = "btn" id = "btn" class="registerbtn" value="Pay Now"  onclick="pay_now()"/>


</form>

<!--form>
  <div class="container">
    <h1 class="header">Payment Form</h1>
    <p class="mock">Please fill Details in the Form Correctly</p>
    <hr>
 <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="number"><b>Contact No</b></label>
    <input type="password" placeholder="Enter Your Contact No.." name="number" id="number" required>
    
    <label for="price"><b>Amount</b></label>
    <input type="text" placeholder="Enter the Amount.." name="amt" id="amt" required>



    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name = "btn" id = "btn"  onclick="pay_now()"/>Proceed to Pay</button>
  </div>
  
</form--->



<script>
//"&amt="+amt+
function pay_now()

{

  var name=jQuery('#name').val();
  //var amt =jQuery('#amt').val();
  var email=jQuery('#email').val();
  var number =jQuery('#number').val();
  
  jQuery.ajax({
		type: 'post',
		url:'payment_process.php',
		data: "&name="+name+"&email="+email+"&number="+number,
		success:function(result)
		{
			var options = {
    "key": "rzp_test_Nsn0ZOaWhu2ETN", 
    "amount": 100*19,
    "currency": "USD",
    "name": "PrathamRai",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response)
	{
	jQuery.ajax({
		type: 'post',
		url:'payment_process.php',
		data:"payment_id="+response.razorpay_payment_id,
		success:function(result){
			window.location.href="thank-you.php";
		}
	});
	// console.log(response);
    }
	};
var rzp1 = new Razorpay(options);
    rzp1.open();
		}
	});
 
  
  
	
}

</script>



















<!---button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_Nsn0ZOaWhu2ETN", // Enter the Key ID generated from the Dashboard
    "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise.
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response){
        console.log(response);
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script----->

<style>
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: skyblue;
  color: black;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 1.9;
}

.registerbtn:hover {
  opacity: 1;
}

.header{
    text-align: center;
    }

/* Add a blue text color to links */
a {
  color: blue;
}
.mock{
 text-align: center;
 }

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: skyblue;
  text-align: center;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=textbox] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=textbox]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
</style>