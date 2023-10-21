<?php

session_start();


echo "santo";

$rcv=$_SESSION['id'];
$delete_photo=$_SESSION['profile_investor'];





require "../Admin/includes/configure.php";
  
  if(!$connnection){
       die("not connected".mysqli_error());
  }else{if(isset($_REQUEST['submitt'])){

    $picture=$_FILES['pic'];
    $pname=$picture['name'];
    $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     if(!empty($pname)){
   
      $locat='investor_profile/';
  
      if(move_uploaded_file($tmp_name,$locat.$name_changer)){
          echo "uploaded";
  
      }else{
          echo 'upload failed';
          die("wait");
      }
      
    }else{
      echo 'picture not found';
       }


    $sql= "UPDATE `investor_reg_table1` SET `investor_profile` = '$name_changer'  WHERE `investor_reg_table1`.`id` = $rcv";

    $resultt=mysqli_query($connnection,$sql);

if($resultt){

      unlink("investor_profile/$delete_photo");

echo "deleted";
    header("location:profile_investor_details.php?Updated");
    // header("location:prc.php?Updated");
                       

          }else{
                 echo "not Updated";
                             }
  
                           }
               } 

            


  

                 ?>