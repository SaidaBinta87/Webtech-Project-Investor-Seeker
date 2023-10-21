
<?php
session_start();
$rcv=$_REQUEST['idtorcv'];

// echo $rcv;

if(isset($_REQUEST['accept-offer']))
{
    // echo "accept";

    

   require "../Admin/includes/configure.php";
   if(!$connnection)
   {
    echo "santo";  
    die("not connected".mysqli_error());
       
   }
   else{
    $_message="Accepted";
    $accepted_investor_id=$_SESSION['id'];
    

    $query="UPDATE `card_information_all` SET `status-of-request`  = '$_message', `accepted_investor_id`  = '$accepted_investor_id' WHERE `card_information_all`.`id` = $rcv";
    $resultt=mysqli_query($connnection,$query);
    if($resultt){
       
       header("location:investor_card_details_show_page.php?id=$rcv");
       
    echo "accepted4";
                           }else{
                     echo "not Updated";
                                 }
      
                               }
  
               } 



if(isset($_REQUEST['Like']))
{
    // echo "accept";

    

   require "../Admin/includes/configure.php";
   if(!$connnection)
   {
    echo "santo";
    die("not connected".mysqli_error());
       
   }
   else{
    $_message="Accepted";

    
    if(isset($_REQUEST['id'])){
      $rcv_id=$_REQUEST['id'];
      $query = "SELECT * FROM `card_information_all` WHERE `id` = '$rcv_id'";



  $result=mysqli_query($connnection,$query);



  $count=mysqli_num_rows($result);

  if($count>0){

     
             
             $row=mysqli_fetch_assoc($result);
            
                  $id=$row['id'];

                  $like=$row['like-count'];

                  $new_value=$like+1;
                 



      //  -----------------------


    

    $query="UPDATE `card_information_all` SET `like-count`  = '$new_value',  WHERE `card_information_all`.`id` = $rcv";
    $resultt=mysqli_query($connnection,$query);
    if($resultt){
       
       header("location:investor_card_details_show_page.php?id=$rcv");
    echo "accepted4";
                           }else{
                     echo "not Updated";
                                 }
      
                               }
  
               } 

            }
 
         }

?>