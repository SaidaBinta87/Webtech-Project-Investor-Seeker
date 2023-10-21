<?php

$username = "";
$email    = "";
$errors = array();

?>

<!DOCTYPE html>
<html>
<head>


	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <style>

    .error{
        border:2px solid red;
        background-color:#E8915E;
        border-radius:5px;
        height:30px;
    }
    </style>

</head>



<body>

<?php 


$msg="";


if(isset($_REQUEST['error']))
{

 $msg = $_REQUEST['error'];

array_push($errors, "Username or password incorrect");
//    echo $msg;

}

?>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
        

        <form name="loginForm" action="logincheak.php" method="get" enctype="multipart/form-data" onsubmit="return validateForm();">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>

                

                <?php  if (count($errors) > 0) : ?>
                       <div class="error">
                               <?php foreach ($errors as $error) : ?>
                                           <p><?php echo $error ?></p>
                                           <?php endforeach ?>
                                </div>
               <?php  endif ?>
                    
                     
           		    <div class="input-div one">
                        <div class="i">
                             <i class="fas fa-user"></i>
                       </div>

                          
                    <div class="div">

                            <h5>Username</h5>
                            <input type="text" class="input" name="username" value="" required>
                              
                   </div>
                </div>



           		<div class="input-div pass">
                      <div class="i"> 
                          <i class="fas fa-lock"></i>
                      </div>
                   <div class="div">
                         <h5>Password</h5>
                         <input type="password" class="input" name="password" value="" required>
                               
       
                    </div>
                </div>


            	<!-- <a href="#">Forgot Password?</a><br> -->
            	<a href="home.php">Back to home ?</a><br>
              <a href="signupForm.php">Don't have account ? Sign Up</a>
            	  <input type="submit" name="submittt" class="btn" value="Login">
            </form>
            
        </div>
    </div>



    <script type="text/javascript" src="js/main.js"></script>

    





<script>


        function validateForm() {



            var form = document.querySelector('.form');
            var username = form.querySelector('.username');
            var password = form.querySelector('.password');
            var isValid = true;

            
            username.nextElementSibling.textContent = "";
            password.nextElementSibling.textContent = "";

            
            if (username.value === "") {
                username.nextElementSibling.textContent = "*";
                isValid = false;
            }
            if (password.value === "") {
                password.nextElementSibling.textContent = "*";
                isValid = false;
            }

            
            if (username.value.length < 4) {
                username.nextElementSibling.textContent = "* Username must be at least 4 characters";
                isValid = false;
            }

            
            if (password.value.length < 8) {
                password.nextElementSibling.textContent = "* Password must be at least 8 characters";
                isValid = false;
            }

           

            return isValid;
        }
    </script>

<script scr="js/loginjs.js"></script>

</body>
</html>

