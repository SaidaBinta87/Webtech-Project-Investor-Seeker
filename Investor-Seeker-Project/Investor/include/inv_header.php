<style>

.logo h2:hover{
scale:1.08;
color:white;
}
</style>

<?php

require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
       }else{

         $usnm=$_SESSION['useRname'];

         $query="SELECT * FROM `investor_reg_table1` WHERE username = '$usnm'";

          $result=mysqli_query($connnection,$query);



   $count=mysqli_num_rows($result);

       if($count>0){

         $row=mysqli_fetch_assoc($result);
           
                 $id=$row['id'];
                 $profile_picture=$row['investor_profile'];
                 $profile_name=$row['name'];
                 
                 }
                 }?>



<div class="home-loged">

<div class="main">
       <div class="topbar">
             <div class="toog_btn">
                          <ion-icon class ="dot" name="menu-outline"></ion-icon>

              </div>

             <div class="dropdown_menu">
                      <form name="test" action="" method="get">
                           <div class="dropsearch" >
                                  <label>
          
                                           <input type="text" placeholder="Search here" name="searchitem">
                                           <a href="#" name="search-button">
                                           <ion-icon name="search-outline"></ion-icon>
                                   
          
                                  </label>
                           </div>


                      </form>
<li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notification</a></li>
<li><a href="All_post_business_details.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>All Post</a></li>
<li><a href="my_investment_history.php"><ion-icon class="ic" name="server-outline"> </ion-icon>My Invest History</a></li>
<li><button class="sign-out-button button">Sign out</button></li>


            </div>

                        <div class="logo">
                             <h2><a href="investor_home.php">Investor<span>Seeker</span></a><h2>
                         </div>




         <!-- search -->
              








<div class="logos">            

<ul class="list">

<li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notifications</a></li>
<li><a href="All_post_business_details.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>All Posts</a></li>
<li><a href="my_investment_history.php"><ion-icon class="ic" name="server-outline"> </ion-icon>My Investment History</a></li>
<li><a href="#"><ion-icon class="ic" name="cash-outline"> </ion-icon>My Wallet</a></li>
<li><a href="#"><ion-icon class="ic" name="business-outline"> </ion-icon>Investor Resources</a></li>

<!-- <div class="user">
<img width="50px"; src="investor_profile/<?php //echo $profile_picture;?>">

</div> -->

</ul>

</div>




 
 
<div class="user"> 
     
    <!-- <img  src="all_pictures/santo.jpg"> -->

    <img width="50px"; src="investor_profile/<?php echo $profile_picture;?>">


 </div>

<!-- drop down profile -->

<div class="dropdown_menu-profile">
  <div class="submenu">

<div class="user-info">
     
<img width="50px"; src="investor_profile/<?php echo $profile_picture;?>">

  <h2><a href="profile_investor_details.php"><?php echo $profile_name;?></a></h2>

</div>

<hr>


<div class="item">
<div class="userdetails-in-profile sobclass">
<a><ion-icon name="search-outline"></ion-icon></a>
<a>Company Details</a>
<a></a>
</div>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="business-outline"></ion-icon></a>
<a>Business Details</a>
<a></a>
</div>

<hr>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="cash-outline"></ion-icon></a>
<a>Reveneu</a>
</div>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="calendar-outline"></ion-icon></a>
<a>Fiscal year</a>
</div>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="wallet-outline"></ion-icon></a>
<a>Profit</a>
</div>

<hr>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="people-outline"></ion-icon></a>
<a>Team Details</a>
</div>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="document-outline"></ion-icon></a>
<a>Proposals</a>
</div>

<div class="userdetails-in-profile sobclass">
<a><ion-icon name="time-outline"></ion-icon></a>
<a>Investment History</a>
</div>

<hr>

<div class="userdetails-in-profile sobclass">
<a href="../Entrepreneur/signout_entro.php"><ion-icon name="log-out-outline"></ion-icon></a>
<a href="../Entrepreneur/signout_entro.php">Sign Out</a>
</div>
</div>

</div>
</div>

<!-- drop down profile end-->



</div>  
<!-- header topbar end -->