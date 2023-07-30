<head>
   <title>Website Counter</title>
   <script defer src="index.js"></script>
   <link rel="stylesheet" href="styles.css">
 </head>
 <body>
   <div>Website visit count:</div>
   <div class="website-counter"></div>
 </body>
</html>


<script>
var counterContainer = document.querySelector(".website-counter");
var visitCount = localStorage.getItem("page_view");
visitCount = 1;

//Add entry for key="page_view"
localStorage.setItem("page_view", 1);


visitCount = Number(visitCount) + 1;

// Update local storage value
localStorage.setItem("page_view", visitCount);

counterContainer.innerHTML = visitCount;


//--------------Index js file ----------------------//
var counterContainer = document.querySelector(".website-counter");
var visitCount = localStorage.getItem("page_view");

// Check if page_view entry is present
if (visitCount) {
  visitCount = Number(visitCount) + 1;
  localStorage.setItem("page_view", visitCount);
} else {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
}
counterContainer.innerHTML = visitCount;

// Adding onClick event listener

</script>
<style>
/* Center child elements */
body,
.website-counter {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

body {
  height: 100vh;
}

/* Styles for website counter container */
.website-counter {
  background-color: #ff4957;
  height: 50px;
  width: 80px;
  color: white;
  border-radius: 30px;
  font-weight: 700;
  font-size: 25px;
  margin-top: 10px;
}

/* Styles for reset button */
#reset {
  margin-top: 20px;
  background-color: #008cba;
  cursor: pointer;
  font-size: 18px;
  padding: 8px 20px;
  color: white;
  border: 0;
}
</style>