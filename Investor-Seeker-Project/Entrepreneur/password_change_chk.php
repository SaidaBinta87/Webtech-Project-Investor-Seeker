<?php
  session_start();

  if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

         if(isset($_REQUEST['change']))
         {



          $given_old_password=$_REQUEST['oldpassword'];
          $new_password=$_REQUEST['newPassword'];
          $confirm_new_password=$_REQUEST['confirmNewPassword'];
             

            require "../Admin/includes/configure.php";
    
          if(!$connnection){
               die("not connected".mysqli_error());
             }else{
      
               $rcv=$_SESSION['id'];
      
               $query="SELECT * FROM `entrepreneur-reg-table1` WHERE id = '$rcv'";
      
               $result=mysqli_query($connnection,$query);
      
      
      
         $count=mysqli_num_rows($result);
      
             if($count>0){
      
                      $row=mysqli_fetch_assoc($result);
                 
                       $id=$row['id'];
                       $profile_picture=$row['profile_photo'];
                       $olddpassword=$row['password'];
                       
                       }
                    
                echo $olddpassword;

            if($given_old_password == $olddpassword)
            {
                       
                    if($new_password==$confirm_new_password){

                      $sql= "UPDATE `entrepreneur-reg-table1` SET `password` = '$new_password'  WHERE `entrepreneur-reg-table1`.`id` = $rcv";

                      $resultt=mysqli_query($connnection,$sql);
                  
                  if($resultt){
                  
                    echo '<script language="javascript">';
                    echo 'alert("password successfully changed")';
                    echo '</script>';
                      
                      header("location:profile_entro_details.php?Updated");
                                         
                  
                            }else{
                                   echo "not changed";
                                               }

                    }else{
                      echo "new password are not same";
                    }
            }else{
              echo "old password is not correct\n";
            }


         }

        }


    ?>