<?php
  session_start();

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
      
               $query="SELECT * FROM `investor_reg_table1` WHERE id = '$rcv'";
      
               $result=mysqli_query($connnection,$query);
      
      
      
         $count=mysqli_num_rows($result);
      
             if($count>0){
      
                      $row=mysqli_fetch_assoc($result);
                 
                       $id=$row['id'];
                       $profile_picture=$row['investor_profile'];
                       $olddpassword=$row['password'];
                       
                       }
                    
                echo $olddpassword;

            if($given_old_password == $olddpassword)
            {
                       
                    if($new_password==$confirm_new_password){

                      $sql= "UPDATE `investor_reg_table1` SET `password` = '$new_password'  WHERE `investor_reg_table1`.`id` = $rcv";

                      $resultt=mysqli_query($connnection,$sql);
                  
                  if($resultt){
                  
                    echo '<script language="javascript">';
                    echo 'alert("password successfully changed")';
                    echo '</script>';
                      
                      header("location:profile_investor_details.php?msg=Updated");
                                         
                  
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