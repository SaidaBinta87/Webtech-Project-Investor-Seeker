<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>


<?php $title="Admin Add";?>


<!DOCTYPE html>
<html>
  <head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <link rel="stylesheet" href="admin_css/add_admin_style.css">



</head>
<body>

<div class="container">
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()" name="form">


        <div class="header">
       <h1>Add Admin </h1>
       <a href="admin-show.php">Back</a>
           </div>
       
           <div class="form_control">
               <lebel>Name</lebel>
               <input type="text" placeholder="Name" id="name" name="name">
         
                  <i class="fa fa-check-circle"></i>
                  <i class="fa fa-exclamation-circle"></i>
                      <small> Error message</small>
              </div>

          


    <!-- <input type="text" placeholder="name" name="name"><br> -->

    <div class="form_control">
            <lebel>Username</lebel>
            <input type="text" placeholder="username" id="username" name="username">
         
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>

    <!-- <input type="text" placeholder="username" name="username"><br> -->

    <div class="form_control">
            <lebel>Password</lebel>
            <input type="password" placeholder="password" id="password" name="password">
         
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>


         <div class="form_control">
            <lebel>Confirm password</lebel>
            <input type="password" placeholder="password Confirm" id="password2" name="confirm_password">
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>


    <!-- <input type="password" placeholder="password" name="password"><br> -->

    
    <div class="form_control">
    <select name="role" id="role">
      <option value="">Select admin role</option>
      <option value="admin">Admin</option>
      <option value="modarator">Modarator</option>
    </select>
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
    </div>




    <div class="form_control">

    <input type="file" name="pic" id="pic">

    <i class="fa fa-check-circle"></i>
    <i class="fa fa-exclamation-circle"></i>
    <small> Error message</small>
    </div>
    <input type="submit" value="Add" name="submit">

      </div>





<?php 
    require "includes/configure.php";


    if(isset($_REQUEST['submit'])){ 
        $name=mysqli_real_escape_string($connnection,$_REQUEST['name']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);
        $role=mysqli_real_escape_string($connnection,$_REQUEST['role']);


        

   $picture=$_FILES['pic'];
   $pname=$picture['name'];
   $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     $queryy="SELECT username FROM `admin-table1` WHERE username='$usnm'";
     $res=mysqli_query($connnection,$queryy) or die("Query failed.");

     $cnt=mysqli_num_rows($res);

     if($cnt>0){
      echo "Username already exist";
     }else{

     
   
   if(!empty($pname)){
   
       $locat='admin-photo/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
           die("wait");
       }
       
     }else{
       echo 'file not found';
        }


     

        require "includes/configure.php";
            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `admin-table1` (`photo`, `name`, `role`, `username`, `password`) VALUES ('$name_changer', '$name', '$role', '$usnm', '$password')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:admin-show.php?inserted");
    }else{
        echo "not inserted";
    }
    
   }

     }

    }

?>



<script src="Admin_all_js/admin_add_validation_js.js"></script>





</body>
  </html>











