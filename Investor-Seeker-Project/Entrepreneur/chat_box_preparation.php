<?php
session_start();

// if(!isset($_SESSION['usrName']))
// {
//   header("location:../Home/loginForm.php");
// }


 if(isset($_REQUEST['chat_button'])){


 $receiver=$_REQUEST['investor_chat'];

 $_SESSION['rcver']=$receiver;

  header("location:chat_box.php");

}


