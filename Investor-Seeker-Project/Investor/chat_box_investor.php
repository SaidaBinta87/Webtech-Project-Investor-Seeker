
<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}



 $sender=$_SESSION['id'];
 $receiver=$_SESSION['reciever'];

 

 if(isset($_REQUEST['chat_button']))
 {
  
     echo $sender;
     echo $receiver;
    
    }
 
 
 
 
  
  
$connection=mysqli_connect('localhost','root','','project_investor_seeker_db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link rel="stylesheet" href="../Entrepreneur/all_css/chatbox_style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
</head>


<body>


    <div class="container">
        <div class="heading">
        <?php

      if($connection){


   

    
    $sql_sender = "SELECT * FROM `investor_reg_table1` WHERE id='$sender'";


    $sender_result=mysqli_query($connection, $sql_sender);
    $rows_investor = mysqli_fetch_assoc($sender_result);
    
             $sender_name = $rows_investor['name'];
             $sender_photo=$rows_investor['investor_profile'];




    






    $sql_rcver = "SELECT * FROM `entrepreneur-reg-table1` WHERE id='$receiver'";
    $reciever_result=mysqli_query($connection, $sql_rcver);
    $rows_entrepreneur= mysqli_fetch_assoc($reciever_result);



        $reciever_name=$rows_entrepreneur['name'];
        $reciever_photo=$rows_entrepreneur['profile_photo'];








    




}



       ?>

        <div class="image">
            <img src="../Home/entroProfile/<?php echo $reciever_photo; ?>">
            <h2><?php  echo  $reciever_name;  ?></h2>  
        </div>

        <div class="left_side">
            <a href="my_investment_history.php"> < Back </a>
        </div>

        
            
        </div>
        <div class="chat-box" id="chatBox">

        

        <?php 

          
        
          
if($connection){

           $sql = "SELECT * FROM `chat_history_and_relational_table` WHERE entrepreneur_id='$receiver' and  investor_id='$sender'";

          
               
            $result=mysqli_query($connection, $sql);

            $count=-1;

            while($rows = mysqli_fetch_assoc($result)){
                  
                   $count++;
                         $_message_rcv=$rows['message'];
                         $_sender_rcv=$rows['sender_id'];
                         $_receiver_rcv=$rows['receiver_id'];
                         $_date_rcv=$rows['send_date'];
                         $_time_rcv=$rows['send_time'];
                         

                    
                         if($_sender_rcv==$sender)
                         {
                                    
                                    
                                    ?>



                            <div class="myconversation old">
                            <h6><?php echo $_date_rcv.$_time_rcv ?> </h6>
                                     <h3 onmouseover="showdate(<?php echo $count; ?>)" onmouseout="hidedate(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     
                                     
                            </div>

                          <?php 
                          
                              }else{

                          ?>


                            <div class="myconversation history">
                            <img src="../Home/entroProfile/<?php echo $reciever_photo; ?>">
                                     <h3 onmouseover="showdate(<?php echo $count; ?>)" onmouseout="hidedate(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     <h6><?php echo $_date_rcv.$_time_rcv ?> </h6>
                                    
                            </div>


                    <?php
                                }
                   

                    

                    
           
       
       
            }  
            
            
            
    
    
    
    }else{

            echo "not connected";
           }
        
        ?>
        
        </div>
        <div class="input-box">
            <form action="send_message.php" method="get">
            <input type="text" name="message" id="messageInput" placeholder="Type your message" Required>
            <input type="submit" name="sendmessage" class="send">
            </form>
        </div>
    </div>
    
    <!-- <script src="all_js/script.js"></script> -->
</body>
</html>





<?php






?>

<script src="../Entrepreneur/entre_all_js/show_date.js"></script>
