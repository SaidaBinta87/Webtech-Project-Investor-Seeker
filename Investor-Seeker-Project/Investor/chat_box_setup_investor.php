<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}


 if(isset($_REQUEST['chatting'])){


 $receiver=$_REQUEST['with_entre_chat'];

 $_SESSION['reciever']=$receiver;

//  echo $_SESSION['reciever'];

  header("location:chat_box_investor.php");

}


