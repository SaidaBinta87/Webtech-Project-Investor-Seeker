<style>

.logo h2:hover{
scale:1.08;
color:white;
}
</style>


<?php 



if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}
     
     $profile_pic=$_SESSION['photo_show_entro'];

?>
                   <!-- navbar strat -->

             
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
                                    </a>
                                    
                                </label>
                            </div>
      
      
                            </form>
                        <li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notification</a></li>
                        <li><a href="entro-get-investment-page1.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>Make Post</a></li>
                        <li><a href="entCard.php"><ion-icon class="ic" name="server-outline"> </ion-icon>My posts</a></li>
                        
                        <li><button class="sign-out-button button"><a href="signout_entro.php">Sign out<a></button></li>
                     </div>
          
                      <div class="logo">
                      <h2><a style="list-style:none;
                      text-decoration:none;
                      color:black;
                      " href="entro_showProfile_first_Get_start.php">Investor<span>Seeker</span></a><h2>
                      </div>
                     
          
                      <!-- search -->
                       <form name="test" action="" method="get">
                      <div class="search" >
                          <label>
                              
                              <input type="text" placeholder="Search here" name="searchitem">
                              <a href="#" name="search-button">
                              <ion-icon name="search-outline"></ion-icon>
                              </a>
                              
                          </label>
                      </div>


                      </form>


                      


          
                      <!-- <script>
                document.onkeydown=function(evt){
                  var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
                  if(keyCode == 13)
                  {
                      //your function call here
                      document.test.submit();
                  }
                       }
                    </script> -->
          
            <div class="logos">            

          <ul class="list">

                        <li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notification</a></li>
                        <li><a href="entro-get-investment-page1.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>Make post</a></li>
                        <li><a href="entCard.php"><ion-icon class="ic" name="server-outline"> </ion-icon>My posts</a></li>
            
        
           </ul>

            </div>
          
          
            <?php         require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
       }else{

         $usnm=$_SESSION['usrName'];

         $query="SELECT * FROM `entrepreneur-reg-table1` WHERE username = '$usnm'";

$result=mysqli_query($connnection,$query);



   $count=mysqli_num_rows($result);

       if($count>0){

         $row=mysqli_fetch_assoc($result);
           
                 $id=$row['id'];
                 $profile_picture=$row['profile_photo'];
                 $Entre_full_name=$row['name'];
                 
                 
                 
                 
                 }}?>

                           
                           
                          <div class="user">
                               
                              <img width="50px"; src="../Home/entroProfile/<?php echo $profile_picture;?>">

          
                          </div>

                       <!-- drop down profile -->

                       <div class="dropdown_menu-profile">
                            <div class="submenu">

                        <div class="user-info">
                               
                        <img width="50px"; src="../Home/entroProfile/<?php echo $profile_picture;?>">

                            <h2><a href="profile_entro_details.php"><?php echo " ".$Entre_full_name;?></a></h2>
                            
        
                        </div>

                        <hr>

                <!-- <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#">Card</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        
                        <li><button class="sign-out-button button">Sign out</button></li>

                    </ul> -->
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
        <a href="signout_entro.php"><ion-icon name="log-out-outline"></ion-icon></a>
        <a href="signout_entro.php">Sign Out</a>
    </div>
</div>

                     </div>
                    </div>
          
                       <!-- drop down profile end-->
                         


                   </div>


                   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                   <script>
                    const toggleBtn=document.querySelector('.toog_btn');
                    const toggleIcn=document.querySelector('.dott');
                    const dropdownMenu=document.querySelector('.dropdown_menu');

                    toggleBtn.onclick = function()
                    {
                      
                        dropdownMenu.classList.toggle('open')
                        const isOpen=dropdownMenu.classList.contains('open')
                        toggleIcn.classList=isOpen
                        ?'cross-outline'
                        :'menu-outline'

                        
                    }
                    
                   
   

   const toggleBtn_pro = document.querySelector('.user');
const dropdownMenu_pro = document.querySelector('.dropdown_menu-profile');

toggleBtn_pro.onclick = function() {
    
        dropdownMenu_pro.classList.toggle('onhoise')
   
}

dropdownMenu_pro.addEventListener('mouseenter', function() {
    dropdownMenu_pro.classList.add('onhoisee');
});

dropdownMenu_pro.addEventListener('mouseleave', function() {
    dropdownMenu_pro.classList.remove('onhoisee');
});


</script> 