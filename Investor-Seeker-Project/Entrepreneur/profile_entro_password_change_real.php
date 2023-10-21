<?php 

session_start();


if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}
require "include/profile_sidebar.php";?>

<div class="settingside-allform">
                    <div class="headingprofile">
                        
                    </div>
                     
                     <form action="password_change_chk.php" class="details" mathod="post">
                           <h2>Profile Setting</h2>
                           <h3>Password Change:</h3>
                           <lebel>Old Password</lebel>
                           <input type="password" name="oldpassword">
                           <lebel>New Password</lebel>
                           <input type="password" name="newPassword"><br>
                           <lebel>Conform New Password</lebel>
                           <input type="password" name="confirmNewPassword"><br>
                           
                           
                           <input type="submit" value="Confirm" name="change"><br>
                        
                     </form>
                    
          </div>
          
        </div>  <!-- conatainer end -->

    </div>  <!-- main end-->




    

    </body>
</html>