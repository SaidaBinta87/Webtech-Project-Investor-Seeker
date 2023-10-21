



<style>
    .invest-button{
        width:140px;
        height:50px;
        color:white;
        background-color:green;
        font-size:20px;
        border-radius:10px
    }
    .invest-button:hover{
        scale:1.08;
        background-color:orange;
    }
</style>



<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>


<?php 
   
   if(isset($_REQUEST['add-admin'])){
    header('location:admin-add.php?passed');

     }
   

     

   // require "includes/configure.php";?>


<?php $title="Request Card";?>
<?php require "includes/admin-sidebar.php";?>
<?php require "includes/top-bar.php";?>
<br>

            <link rel="stylesheet" href="../Entrepreneur/all_css/business_details_Style.css">
            <!-- <link rel="stylesheet" href="../Entrepreneur/all_css/cardStyle.css"> -->
            


<?php
    
    

// $session_name=$_SESSION['usrName'];
// $profile_photo=$_SESSION['photo_show_entro'];




$connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');
$rcv=$_REQUEST['idd'];
$result = mysqli_query($connnection, "SELECT * FROM `card_information_all` WHERE id='$rcv'");

$cardHtml = '';

while($row = mysqli_fetch_assoc($result)){


       echo

       '<h1>Busines details</h1>
       <div class="container-main">
                       <div class="fullpage">
        
                               <div class="investment-page">
                                    <div class="ideaimg">


                                           <img src="../Entrepreneur/all_pictures/card-cover-photo/' . $row['cover-photo'] . '">
                                   </div>
      
                              <div class="entrepreneur-section">
                                 <div class="entrepreneur-photo">
                                      <img src="../Home/entroProfile/'. $row['entro-photo'].'" alt="Entrepreneur Photo">
                                 </div>
                                      <div class="entrepreneur-bio">
                                           <h2>' . $row['name'] . '</h2>
                                            <h3>' . $row['education'] . '</h3>
                                             <h3>' . $row['email'] . '</h3>
                                             <h3>' . $row['phone'] . '</h3>

                 <p>' . $row['entrepreneur-post'] . '.</p>
           </div>
        <div class="company-logo">
            <img src="../Entrepreneur/all_pictures/company_logo/'.$row['company-logo'].'" alt="Company Logo">
          </div>
      </div>

                                 <div class="business-details">
                                 <h2>Business Details</h2>
                                         <h3>BusinessType: ' . $row['business-type'] . '</h3>
                                         <h3>Company name : ' . $row['company-name'] . '</h3>
                                          <h3>Location : ' . $row['location'] . '</h3>


                 <p>' . $row['product-description'] . ':</p>
        <ul>
          <li>' . $row['product-usecase-1'] . '.</li>
          <li>' . $row['product-usecase-2'] . '.</li>
          <li>' . $row['product-usecase-3'] . '.</li>
          <li>' . $row['product-usecase-4'] . '.</li>
        </ul>
        <p>' . $row['investment-purpose'] . '.</p>
        <p>Revenue: ' . $row['revenue'] . ' Tk</p>
        <p>Last month sell: ' . $row['last-month-sell'] . ' Tk</p>
        <p>Last year sell: ' . $row['last-year-sell'] . ' Tk</p>
        <p>Last year sell: ' . $row['total-sell'] . ' Tk</p>
        <p>Total sell: ' . $row['total-sell'] . ' Tk</p>
        <p>Amount of Investment Required: ' . $row['investment-amount'] . ' Tk</p>
        <p>Equrty offer: ' . $row['equity-offer'] . ' Tk</p>
        <p>Comapny Goal: ' . $row['goal'] . '</p>
        <p>Request date: ' . $row['date-of-post'] . '</p>
        <form action="" method="post">
        <input type="submit" class="invest-button" name="submit" value='; 
        
        
        
        if($row['status-of-post']=="pending"){
          echo "Accept";
        }else{
          echo "Verified";
        } 
        
        
        echo '>
        <input type="submit" class="Not-inteerested invest-button" name="accept" value=';
        
        if($row['status-of-request']=="not-accepted"){
          echo "Reject";
        }else{
          echo "Already Rejected";
        } 
        
        echo'>
      </form></div>
    </div>



<br><br>';

             
                }//last

                '</div>'
?>
 
    <?php //echo $cardHtml; ?>

   

    <?php


if(isset($_REQUEST['submit']))
{
require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{if(isset($_REQUEST['submit'])){

    $nname="Verified";
   
    

  $sql= "UPDATE `card_information_all` SET `status-of-post` = '$nname' WHERE `card_information_all`.`id` = $rcv";
  $resultt=mysqli_query($connnection,$sql);
  if($resultt){
     '<script>window.location.href = "admin-2-request.php";</script>';exit;
                         }else{
                   echo "not Updated";
                               }
    
                             }

             }



  
}







