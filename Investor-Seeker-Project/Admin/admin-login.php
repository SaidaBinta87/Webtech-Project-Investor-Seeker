<?php

$username = "";
$email    = "";
$errors = array();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="admin_css/admin-login-style.css">

     <?php  $msg="";?>

    
</head>
<body>

<?php 

if($_REQUEST){
 $msg= $_REQUEST['error'];

array_push($errors, "Username or password incorrect");
//    echo $msg;
}


?>



    <div class="back">
        <form class="form" action="admin-login-ck.php" method="get" onsubmit="return validateForm();">
            <h1><b>Login</b></h1>

               <?php  if (count($errors) > 0) : ?>
                       <div class="error">
                               <?php foreach ($errors as $error) : ?>
                                           <p><?php echo $error ?></p>
                                           <?php endforeach ?>
                                </div>
               <?php  endif ?>


            <input type="text" class="username" name="username" placeholder="Username">
            <span class="error-message"></span><br>
            <input type="password" class="password" name="password" placeholder="Password">
            <span class="error-message"></span><br>
            <!-- <div class="forgot"><p><a href="#">forgot password ?</a></p></div> -->
            <input type="submit" name="submit" value="Login">
            <div class="not">
                <p>Not an Admin ?<a href="../Home/home.php">back to Home</a></p>
            </div>

         
          
        </form>
    </div>
</body>
</html>





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

