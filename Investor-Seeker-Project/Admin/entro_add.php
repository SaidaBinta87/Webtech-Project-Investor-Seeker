<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

 $title="entro Add";



        // $connnection = mysqli_connect('localhost','root','','investor-seeker-db');

        require "includes/configure.php";

        if(isset($_REQUEST['submit'])){ 
        $fname=mysqli_real_escape_string($connnection,$_REQUEST['fname']);
        $lname=mysqli_real_escape_string($connnection,$_REQUEST['lname']);
        //$lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
        $eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
        $phone_number=mysqli_real_escape_string($connnection,$_REQUEST['phone']);
        // $password=mysqli_real_escape_string($connnection,md5($_REQUEST['password']));
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);

        $fullname=$fname." ".$lname;
        

        $today = date('y:m:d');


        $fullname=$fname.$lname;
       


        

   $picture=$_FILES['pictur'];
   $pname=$picture['name'];
   $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     $queryy="SELECT username FROM `entrepreneur-reg-table1` WHERE username='$usnm'";
      $res=mysqli_query($connnection,$queryy) or die("Query faild.");

     $cnt=mysqli_num_rows($res);

     if($cnt>0){
      echo "Username already exist";
     }else{

     
   
   if(!empty($pname)){
   
       $locat='../Home/entroProfile/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
       }
       
     }else{
       echo 'file not found';
        }


     

        require "includes/configure.php";

        // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');
            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `entrepreneur-reg-table1` (`profile_photo`,`first-name`,`last-name`, `name`, `username`, `nid`, `email`,`phone`, `password`, `date_sign`) VALUES ('$name_changer', '$fname', '$lname', '$fullname', '$usnm', '$nid', '$eml', '$phone_number', '$password', '$today')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:admin-entrepreneur.php?inserted");

    


    }else{
        echo "not inserted";

        header("location:signUpCheak.php?notinserted");
    }
    
   }

     }

    }

    





?>










<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="admin_css/add_entro_style.css">
<style>
    
</style>

</head>
<body>



<div class="container">

<form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()" name="form">

    <!-- <input type="text" placeholder="first name" name="fname"><br> -->

              <div class="header">
                     <h1>Add Entrepreneur </h1>
                     <a href="admin-entrepreneur.php">Back</a>
               </div>
       
              <div class="form_control">
                     <lebel>First Name</lebel>
                     <input type="text" placeholder="first name" id="firstname" name="fname">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>

                <!-- <input type="text" placeholder="last lname" name="lname"><br> -->
                <div class="form_control">
                     <lebel>Last Name</lebel>
                     <input type="text" placeholder="last lname" id="lastname" name="lname">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>                

            <!-- <input type="text" placeholder="nid" name="nid"><br> -->


                <div class="form_control">
                     <lebel>Nid</lebel>
                     <input type="number" placeholder="nid" id="nid" name="nid">
         

                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>




                <!-- <input type="text" placeholder="email" name="email"><br> -->


                <div class="form_control">
                     <lebel>Email</lebel>
                     <input type="email" placeholder="email" id="email" name="email">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>  

                
                <!-- <input type="text" placeholder="phone" name="phone"><br> -->


                <div class="form_control">
                     <lebel>Phone</lebel>
                     <input type="number" placeholder="phone" id="phone" name="phone">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>


                <!-- <input type="text" placeholder="username" name="username"><br> -->


                <div class="form_control">
                     <lebel>Username</lebel>
                     <input type="text" placeholder="username" id="username" name="username">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>


                <!-- <input type="password" placeholder="password" name="password"><br> -->


                <div class="form_control">
                     <lebel>Password</lebel>
                     <input type="password" placeholder="password" id="password" name="password">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>    



                <div class="form_control">
                     <lebel>Confirm Password</lebel>
                     <input type="password" placeholder="confirm_password" id="confirm_password" name="confirm_password">
         
                     <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>




    

      

    
                <div class="form_control">
           <input type="file" name="pictur" id="pictur" placeholder="select"><br>

           <i class="fa fa-check-circle"></i>
                     <i class="fa fa-exclamation-circle"></i>
                     <small> Error message</small>
                </div>





    <input type="submit" value="Add" name="submit">

</form>

</div>

<script src="Admin_all_js/entro_add_validation_js.js"></script>

</body>

</html>


