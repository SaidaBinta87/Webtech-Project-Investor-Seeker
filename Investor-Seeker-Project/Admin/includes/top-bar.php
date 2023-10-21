

     
     <div class="main">
          <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
                
            </div>

            <div class="tittleee">
             <h2><?php echo $title; ?><h2> 
            </div>
           

            <!-- search -->
             <form name="test" action="admin-show.php" method="get">
                 <div class="search" >
                    <label>
                    
                    <input type="text" placeholder="Search here admin .." name="searchitem">
                    <a href="#" name="search-button">
                    <ion-icon name="search-outline"></ion-icon>
                    </a>
                    
                </label>
            </div>

                              <script>
                                     document.onkeydown=function(evt){
                                     var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;


                                          if(keyCode == 13)
                                                          {
                                                            
                                                             document.test.submit();
                                                          }
                                                                      }
                              </script>




               </form>


<!-- i--------------- -->
<?php
       
       $profile_pic=$_SESSION['photo_show_admin'];

?>
<!-- i--------------- kaj baki ase onek session ar akhane  -->















                 
                <div class="user">
                    <img width="50px"; src="admin-photo/<?php echo $profile_pic;?>">
                    <!-- <img src="pic.jpg"> -->

                </div>
         </div>


            <!-- card -->

            


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="Admin_all_js/responsive.js"></script>
        
        

    