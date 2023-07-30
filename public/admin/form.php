
<?php include('inc/header.php');?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stel.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Registation</div>
        <form action="#">
            <div class="user_details">
                <div class="input_pox">
                    <span class="datails">Full Name</span>
                    <input type="text" placeholder="enter your name" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Username</span>
                    <input type="text" placeholder="enter your Username" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Email</span>
                    <input type="text" placeholder="enter your Email" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Phone Number</span>
                    <input type="text" placeholder="enter your Phone" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Password</span>
                    <input type="text" placeholder="enter your Password" required>
                </div>
                <div class="input_pox">
                    <span class="datails">Confirm Password</span>
                    <input type="text" placeholder="Confirm your Password" required>
                </div>
            </div>
            <div class="gender_details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender_title"> Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Mail</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Femail</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Perer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: linear-gradient(123deg, #71b8e7,#9b59b6);
}
.container{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
}
.container  .title{
    font-size: 25px;
    font-weight: 500; 
    position: relative;
}
.container .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: linear-gradient(123deg, #71b8e7,#9b59b6);
}
.container form .user_details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
form .user_details .input_pox{
    margin-bottom: 15px;
    margin: 20px 0 12px 0;
    width: calc(100% / 2 - 20px);
}
.user_details .input_pox .datails{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}
.user_details .input_pox input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;

}
.user_details .input_pox input:focus,
.user_details .input_pox input:valid{
border-color: #9b59b6;
}
form .gender_details .gender_title{
    font-size: 20px;
    font-weight: 500;
}
form .gender_details .category{
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
}
.gender_details .category label{
display: flex;
}
.gender_details .category .dot{
height: 18px;
width: 18px;
background: #d9d9d9;
border-radius: 50%;
margin-right: 10px;
border: 5px solid transparent;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
border-color: #d9d9d9;
background-color: #9b59b6;
}
form input[type="radio"]{
    display: none;
}
form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(123deg, #71b8e7,#9b59b6);

}
form .button input :hover{
    background: linear-gradient(-123deg, #71b8e7,#9b59b6);
}
@media (max-width: 584px){
    .container{
        max-width: 100%;
    }
    form .user_details .input_pox{
        margin-bottom: 15px;
        width:100%;
    }
    form .gender_details .category{
        width: 100%;
    }
    .container form .user_details{
        max-height: 300px;
        overflow: scroll;
    }
    .user_details::-webkit-scrollber{
     width: 0;
    }
}
</style>
