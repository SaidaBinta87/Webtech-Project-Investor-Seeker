<?php

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

 $sender=$_SESSION['id'];
 $receiver=$_SESSION['reciever'];

if(isset($_REQUEST['sendmessage']))
{
    
    $_message=$_REQUEST['message'];
    $_date=date("Y-m-d");
    $_time=date("h:i:sa");
    
    $connectionn=mysqli_connect('localhost','root','','project_investor_seeker_db');
    if($connectionn){

    $query="INSERT INTO `chat_history_and_relational_table` (`entrepreneur_id`, `investor_id`, `sender_id`, `receiver_id`, `message`, `send_date`, `send_time`) VALUES ('$receiver', '$sender', '$sender', '$receiver', '$_message', '$_date', '$_time')";


     $successfull=mysqli_query($connectionn,$query);

     if($successfull)
     {
        
        header("location:chat_box_investor.php");

        
     }else{
        echo "not inserted";
     }

    }else{

        echo"not connected2";
    }




}

?>