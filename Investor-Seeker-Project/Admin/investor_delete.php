
<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>


<?php 


   
   
   require "includes/configure.php";    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{

        

       $rcv=$_REQUEST['id'];
      $rcvv=$_REQUEST['investor_profile'];
       $sqlin= "DELETE FROM `investor_reg_table1` WHERE id = $rcv";
   

        $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       unlink("../Home/en_profile/$rcvv");

       
       header("location:admin-investor.php?deleted");

    }else{
        header("location:admin-investor.php?not deleted");
    }
    
   } 

?>




