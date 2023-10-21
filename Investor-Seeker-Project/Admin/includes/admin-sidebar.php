<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     -->
<!-- html part     start -->

<?php

    $logged_in_name=$_SESSION['usrName'];


require "includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{

        $queryyy="SELECT * FROM `admin-table1` WHERE username= '$logged_in_name'";

        $result_rule=mysqli_query($connnection,$queryyy);



        $counttt=mysqli_num_rows($result_rule);

        if($counttt>0){

            $rows=mysqli_fetch_assoc($result_rule);

            $_role_of_admin=$rows['role'];



  

        }



    }
        
           ?>

    


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
        <title>Admin panel</title>
        <link rel="stylesheet" href="admin_css/adminstyle.css">
        <link rel="stylesheet" href="admin_css/cssadmin-show-style.css">

    </head>


    <body>

        <div class="container">
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="logo-angular"></ion-icon></span>
                        <span class="tittle" style="font-size:22px;"><b>ADMIN PANEL</b></span>
                        </a>
                    </li>

                    <li>
                        <a href="admin.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="tittle" value="deshboard" name="deshboard">Deshboard</span>
                        </a>
                    </li>

                    <?php

                    if($_role_of_admin=='admin'){

                    ?>

                    <li>
                        <a href="admin-show.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="tittle">All Admin</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="admin-investor.php">
                        <span class="icon"><ion-icon name="logo-usd"></ion-icon></span>
                        <span class="tittle">Investor</span>
                        </a>
                    </li>

                    <li>
                        <a href="admin-entrepreneur.php">
                        <span class="icon"><ion-icon name="bulb-outline"></ion-icon></span>
                        <span class="tittle">Entrepreneur</span>
                        </a>
                    </li>


                    <?php

                           }else{

                             ?>



                            <li>
                            <a href="#" onclick="alert('Only admin alowed to access this!');">
                            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="tittle">All Admin</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" onclick="alert('Only admin alowed to access this!');">
                            <span class="icon"><ion-icon name="logo-usd"></ion-icon></span>
                            <span class="tittle">Investor</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" onclick="alert('Only admin alowed to access this!');">
                            <span class="icon"><ion-icon name="bulb-outline"></ion-icon></span>
                            <span class="tittle">Entrepreneur</span>
                            </a>
                        </li>

                    <?php

                           }

                    ?>


                    <li>
                        <a href="All_investment_card.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="tittle">All Card & investment</span>
                        </a>
                    </li>

                    <li>
                        <a href="admin-request-entro.php">
                        <span class="icon"><ion-icon name="open-outline"></ion-icon></span>
                        <span class="tittle">Request</span>
                        </a>
                    </li>

                    

                    <li>
                        <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="tittle">Setting</span>
                        </a>
                    </li>

                    

                    <li>
                        <a href="admin-signout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="tittle">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

     <!---->

     
     
        <!-- container div -->
                


        


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        