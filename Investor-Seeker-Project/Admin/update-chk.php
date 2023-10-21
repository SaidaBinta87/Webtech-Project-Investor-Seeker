
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
    }else{if(isset($_REQUEST['submit'])){

    $nname=$_REQUEST['name'];
    $nrole=$_REQUEST['role'];
    $nusnm=$_REQUEST['username'];
    
    $npassword=$_REQUEST['password'];

    $rcv=$_REQUEST['updating-hidden-id'];

  $sql= "UPDATE `admin-table1` SET name='$nname',role='$nrole',username='$nusnm',password='$npassword' WHERE id = $rcv";
  $resultt=mysqli_query($connnection,$sql);

 if($resultt){
      header("location:admin-show.php?Updated");
                         }else{
                   echo "not Updated";
                               }
    
                             }

             }


?>