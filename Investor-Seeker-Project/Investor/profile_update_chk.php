

<?php
session_start();

$rcv=$_SESSION['id'];

if(isset($_REQUEST['submit'])){



require "../Admin/includes/configure.php";
  
  if(!$connnection){
       die("not connected".mysqli_error());
  }else{if(isset($_REQUEST['submit'])){

  $fname=$_REQUEST['fname'];
  $lname=$_REQUEST['lname'];
  
  $nnid=$_REQUEST['nid'];
  $nemail=$_REQUEST['email'];
  $nrole=$_REQUEST['role'];
  $nusnm=$_REQUEST['username'];
  $phonenum=$_REQUEST['mobile'];
  $flname=$fname." ".$lname;
  
//   $npassword=$_REQUEST['password'];

  

$sql= "UPDATE `investor_reg_table1` SET `first-name` = '$fname', `last-name` = '$lname', `name` = '$flname', `username` = '$nusnm', `nid` = '$nnid', `email` = '$nemail', `phone` = '$phonenum' WHERE `investor_reg_table1`.`id` = $rcv";
$resultt=mysqli_query($connnection,$sql);

if($resultt){

    header("location:profile_investor_details.php?Updated");
                       

}else{
                 echo "not Updated";
                             }
  
                           }

           }

          }
?>