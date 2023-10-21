<?php

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}




$rcv=$_SESSION['id'];
$delete_photo=$_SESSION['photo_show_entro'];





require "../Admin/includes/configure.php";
  
  if(!$connnection){
       die("not connected".mysqli_error());
  }else{if(isset($_REQUEST['submitt'])){

    $picture=$_FILES['pic'];
    $pname=$picture['name'];
    $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     if(!empty($pname)){
   
      $locat='../Home/entroProfile/';
  
      if(move_uploaded_file($tmp_name,$locat.$name_changer)){
          echo "uploaded";
  
      }else{
          echo 'upload failed';
          die("wait");
      }
      
    }else{
      echo 'picture not found';
       }


    $sql= "UPDATE `entrepreneur-reg-table1` SET `profile_photo` = '$name_changer'  WHERE `entrepreneur-reg-table1`.`id` = $rcv";

    $resultt=mysqli_query($connnection,$sql);

if($resultt){

      unlink("../Home/entroProfile/$delete_photo");
echo "deleted";
    header("location:profile_entro_details.php?Updated");
    // header("location:prc.php?Updated");
                       

          }else{
                 echo "not Updated";
                             }
  
                           }
               } 

            


  

                 ?>