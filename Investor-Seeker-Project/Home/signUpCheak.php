


<?php 


        require "../Admin/includes/configure.php";


        if(isset($_POST['submit']) || isset($_POST['submit2'])) {

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $nid = $_POST['nid'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $password = $_POST['password'];
          $confirm_password = $_POST['confirm_password'];
      
          if(empty($firstname) || empty($lastname) || empty($username) || empty($nid) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {

            header("location:signupForm.php?msg=All fields are required"); 

            echo "All fields are required.";
          } 
          
          
          
          
          
          
          // registered successfully   from there  after else 
          else {
        if(isset($_REQUEST['submit'])){ 
        $fname=mysqli_real_escape_string($connnection,$_REQUEST['firstname']);
        $lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
        $eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
        $phone=mysqli_real_escape_string($connnection,$_REQUEST['phone']);
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);
        

        $today = date('y:m:d');


        $fullname=$fname.$lname;
       


        

   $picture=$_FILES['profile-pic'];
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
   
       $locat='entroProfile/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
           die("wait");
       }
       
     }else{
       echo 'file not found';
        }


     

        require "../Admin/includes/configure.php";

            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `entrepreneur-reg-table1` (`profile_photo`, `name`,`first-name`,`last-name`,`phone`, `username`, `nid`, `email`, `password`, `date_sign`) VALUES ('$name_changer', '$fullname', '$fname', '$lname', '$phone', '$usnm', '$nid', '$eml', '$password', '$today')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
      
       header("location:loginForm.php?inserted");

    


    }else{
        echo "not inserted";

        header("location:signUpCheak.php?notinserted");
    }
    
   }

     }

    }

    ?>



    


<?php 




require "../Admin/includes/configure.php";

if(isset($_REQUEST['submit2'])){ 
$fname=mysqli_real_escape_string($connnection,$_REQUEST['firstname']);
$lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
$usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
$nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
$phone=mysqli_real_escape_string($connnection,$_REQUEST['phone']);
$eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
$password=mysqli_real_escape_string($connnection,$_REQUEST['password']);


$today = date('y:m:d');


$fullname=$fname." ".$lname;





$picture2=$_FILES['profile-pic'];
$pname2=$picture2['name'];
$temp_name=$picture2['tmp_name'];


$name_changer=uniqid().".png";


$queryy="SELECT username FROM `investor_reg_table1` WHERE username='$usnm'";
$res=mysqli_query($connnection,$queryy) or die("Query faild.");

$cnt=mysqli_num_rows($res);

if($cnt>0){
echo "Username already exist";
}else{



if(!empty($pname2)){

$locat='../Investor/investor_profile/';

if(move_uploaded_file($temp_name,$locat.$name_changer)){


}else{
   echo 'upload failed';
}

}else{
echo 'file not found';
}




require "../Admin/includes/configure.php";

    if(!$connnection){

 die("not connected".mysqli_error());
}else{

$sqlin= "INSERT INTO `investor_reg_table1` (`investor_profile`, `name`, `first-name`,`last-name`,`phone`, `username`, `nid`, `email`, `password`, `date_sign`) VALUES ('$name_changer', '$fullname', '$fname', '$lname', '$phone', '$usnm', '$nid', '$eml', '$password', '$today')";

$result=mysqli_query($connnection,$sqlin);


if($result){

header("location:loginForm.php?inserted");




}else{
echo "not inserted";

header("location:signUpCheak.php?notinserted");
}

}

}

}
         }}

?>