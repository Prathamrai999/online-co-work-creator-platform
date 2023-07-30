<div class="credit-card-form">
    <h2>Withdraw Your Earnings</h2>
    <form>
      <div class="form-group">
        <label for="card-number">Email Adress</label>
        <input type="text" id="card-number" placeholder="email Address">
      </div>
      <div class="form-group">
        <label for="card-holder">Username</label>
        <input type="text" id="card-holder" placeholder="Your's name">
      </div>
	        <div class="form-group">
        <label for="ifsc">IFSC Code</label>
          <input type="text" id="ifsc" placeholder="IFSC">
      </div>
      <div class="form-group">
         <label for="expiry-date">Bank Account Number</label>
          <input type="text" id="acnum" placeholder="102XXXXXXXXXX">
      </div>
      <button type="submit"  name = "withdraw" class="click-button" onclick="showLoading(event, this)">Withdraw Now</button>
    </form>
  </div>
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Montserrat:wght@600&display=swap');

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.credit-card-form {
  margin-top: 10%;
  margin-left: 35%;
  max-width: 400px;
  padding: 1em;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
  font-family: 'Montserrat', sans-serif;
  background-color: #dbdbdb;
  text-align: center;
  color: #424242;
  align-content: center;
}

.credit-card-form h2 {
  margin-bottom: 10%;
  font-size: 24px;
}

.credit-card-form .form-group {
  margin-bottom: 15px;
}

.credit-card-form label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #777;
}

.credit-card-form input[type="text"],
.credit-card-form select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 1rem;
  font-size: 16px;
    font-family: 'Montserrat', sans-serif;
}

.credit-card-form .form-row {
  display: flex;
}


.credit-card-form button[type="submit"] {
  width: 100%;
  padding: 14px;
  background-color: #585858;
  color: #fff;
  border: none;
  border-radius: 1rem;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
  font-family: 'Montserrat', sans-serif;
}

.credit-card-form button[type="submit"]:hover {
  background-color: #bebebe;
  color: #424242;
  font-family: 'Montserrat', sans-serif;
}

.credit-card-form button[type="submit"]:focus {
  outline: none;
  font-family: 'Montserrat', sans-serif;
}


  </style>
           