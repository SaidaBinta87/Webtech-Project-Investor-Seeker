<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>

<?php $title="All Users";?>
<?php require "includes/admin-sidebar.php";?>
<?php require "includes/top-bar.php";?>
