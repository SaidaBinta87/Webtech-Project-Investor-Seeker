<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="all_css/business_details_Style.css">
            <link rel="stylesheet" href="all_css/entro_main_style.css">
            <link rel="stylesheet" href="all_css/cardStyle.css">
            
           <style>


        
        .profile-card {
            margin-top:2vh;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            display:none;
        }

        .show{
              
            display:block;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px; 
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
        }

        .profile-label {
            font-weight: bold;
        }

        .profile-email, .profile-phone {
            margin-top: 10px;
        }

        .contact-button, .chat-button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .contact-button {
            background-color: #3498db;
            color: #fff;
        }

        .chat-button {
            background-color: #2ecc71;
            color: #fff;
        }
    
              

              </style>

    </head>

    <body>
    <?php require "include/Header_entro_home.php";?>



<?php

/////////////////array 

$_card_investor_id_by_position=array();


$session_name=$_SESSION['usrName'];
$profile_photo=$_SESSION['photo_show_entro'];

$_entro_id_logged_in=$_SESSION['id'];




$connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

$result = mysqli_query($connnection, "SELECT * FROM `card_information_all` WHERE username='$session_name'");

$cardHtml = '';
$count=0;





while($row = mysqli_fetch_assoc($result))

  {
         $count++;
         $acceptedPersonId = $row['accepted_investor_id'];
         $card_id=$row['id'];
    //   echo $acceptedPersonId;

        
    array_push($_card_investor_id_by_position,$acceptedPersonId);
    
     
    



    //    $cardHtml .= 

    echo 
       

       '<h1>My Busines details : '.$count.'</h1>
       <div class="container-main">
       
                       <div class="fullpage">
        
                               <div class="investment-page">
                                    <div class="ideaimg">


                                           <img src="all_pictures/card-cover-photo/' . $row['cover-photo'] . '">
                                   </div>
      
                              <div class="entrepreneur-section">
                                 <div class="entrepreneur-photo">
                                      <img src="../Home/entroProfile/'. $row['entro-photo'] .'" alt="Entrepreneur Photo">
                                 </div>
                                      <div class="entrepreneur-bio">
                                           <h2>' . $row['name'] . '</h2>
                                            <h3>' . $row['education'] . '</h3>
                                             <h3>' . $row['email'] . '</h3>
                                             <h3>' . $row['phone'] . '</h3>

                 <p>' . $row['entrepreneur-post'] . '.</p>
           </div>
        <div class="company-logo">
            <img src="all_pictures/company_logo/'.$row['company-logo'].'" alt="Company Logo">
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
        <button class="invest-button">' . $row['status-of-post'] . '</button>';



        if($acceptedPersonId !=-1){
       echo


        '<button onclick="showinfo('.$count.')" class="Not-inteerested invest-button">' . $row['status-of-request'] . ' -by</button>';
             }
             else{

                echo

                '<button onclick="" class="Not-inteerested invest-button">' . $row['status-of-request'] . '</button>';
             }
     
       echo

        '</div>';


           if($acceptedPersonId !=-1)
                {
//  
            $sql = mysqli_query($connnection, "SELECT * FROM `investor_reg_table1` WHERE id='$acceptedPersonId'");

                 if($rows_of_inv= mysqli_fetch_assoc($sql))
                      {
                              $inv_photo=$rows_of_inv['investor_profile'];
                              $inv_name=$rows_of_inv['name'];
                             $inv_email=$rows_of_inv['email'];
                            $inv_phone=$rows_of_inv['phone'];
                            
                     }

         
     
     echo 


      '<div class="profile-card" id="showdrop">
      <img src="../Investor/investor_profile/'.$inv_photo.'" alt="Profile Picture" class="profile-picture">
           <div class="profile-name">'.$inv_name.'</div>
                <div class="profile-label">Email:</div>
                 <div class="profile-email">'.$inv_email.'</div>
                <div class="profile-label">Phone:</div>
                <div class="profile-phone">+880'.$inv_phone.'</div>

                
                <button class="contact-button">Contact</button>';

               



                echo '<form action="chat_box_preparation.php?investor_chat='.$_card_investor_id_by_position[$count-1].'" method="post">
                     <input type="submit" name="chat_button" value="chat" class="chat-button">

                    

                </form>

                <button onclick="hideinfo('.$count.')" class="contact-button">Show less</button>

               
               </div>';

      
      
      
    


                    }



echo
    
    '
    </div>
    
    <br><br>


          


<br><br>


<h1>My card  : '.$count.'</h1>

<div class="container">
                <div class="slidecontainer">
                    <div class="card">
                        <img src="all_pictures/card-photo/'. $row['card-photo'] .'" alt="Image 1">
                        <div class="bottom">
                            <h2>' . $row['company-name'] . '</h2>
                            <p class="par">' . $row['investment-purpose'] . '</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p>Rated: 4.9 out of 5 stars</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>';










    

             


              
               
                }////////////last

                '</div>'
?>
 
    <?php 
    
    
    // echo $cardHtml; 
    
    
    
    ?>
    <?php require "footer.php";?> 

    <script src="accepted_card.js"></script>
</body>
</html>
