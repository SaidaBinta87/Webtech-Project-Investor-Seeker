<?php 

session_start();

?>


<style>
.navbar ul li a .icon ion-icon {
    font-size: 1.75em;
    margin-top: 14px;
}
</style>

<?php  


        
        require "includes/configure.php";
        $query="SELECT * FROM `investor_reg_table1`";
    
         $result=mysqli_query($connnection,$query);
         $countinvestor=mysqli_num_rows($result);

         $query="SELECT * FROM `entrepreneur-reg-table1`";
    
         $result=mysqli_query($connnection,$query);
         $countentro=mysqli_num_rows($result);

         $query="SELECT * FROM `admin-table1`";
         $result=mysqli_query($connnection,$query);
         $adminCount=mysqli_num_rows($result);


         $all_user_count=$countinvestor+$countentro;

         
     
         echo "<script>let investorcount = '$countinvestor';</script>";
         echo "<script>let entrocount = '$countentro';</script>";

              
        ?>


<?php

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

 $title="Deshboard";?>



<?php require "includes/admin-sidebar.php";
require "includes/top-bar.php";?>



<div class="cardbox"> 
    <!-- divvv started  cardbox-->


                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php echo $adminCount; ?>
                        </div>
                        <div class="cardname">
                           Total Employee
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="eye-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <!-- 8,504 -->
                            <?php echo $all_user_count; ?>
                        </div>
                        <div class="cardname">
                           All Users
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="people-outline"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php echo $countinvestor; ?>
                        </div>
                        <div class="cardname">
                           Investors
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="logo-usd"></ion-icon>  
                    </div>

                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                        <?php echo $countentro; ?>
                        </div>
                        <div class="cardname">
                          Entrepreneur
                        </div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="bulb-outline"></ion-icon>  
                    </div>

                </div>
         </div>
            <!-- cardbox end-->


               <!-- chart -->

               <div class="grapbox">
               
                <div class="box box1">
                     <canvas id="myChart"></canvas>
                   
                    <!--<img src="photo/chart.png">-->
                </div>
                <div class="box box2">
                <canvas id="invest"></canvas>
                <!--<img src="photo/rrr.jpg">-->
                </div>
                <div class="box box1">
                    <canvas id="visits"></canvas>
                    <!--<img src="photo/chart.png">-->
                </div>
                
               </div>
               <!-- chart end-->

        

            <!-- details -->

            <div class="details">
                <div class="record">
                    <div class="cardHeader">
                          <h2>Recent Activity</h2>
                          <a href="All_investment_card.php" class="btn">view all</a>
                    </div>

                     <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Campany</td>
                                <td>Request Amount</td>
                                <td>Verification Status</td>
                                <td>Invest Status</td>
                            </tr>
                        </thead>
                        <tbody>

<?php
                        require "includes/configure.php";
    
     if(!$connnection){
         die("not connected".mysqli_error());
     }else{



        if(isset($_REQUEST['show-button'])){
            $sr="";
    
             }
           
    
            
            $query="SELECT * FROM `card_information_all`";
    
            $result=mysqli_query($connnection,$query);
    
    
    
            $count=mysqli_num_rows($result);
    
            if($count>0){
            
               
                 
                 $serial=0;
        while($row=mysqli_fetch_assoc($result)){
        //     echo "<pre>";
        //    print_r($row);
        //    echo "</pre>";
        
             $username=$row['username'];
             $id=$row['id'];
             $profile_pic=$row['card-photo'];
             $Comapany_name=$row['company-name'];
             $request_amount=$row['investment-amount'];
             

             



             $status=$row['status-of-post'];
             $status_2=$row['status-of-request'];
             
             $serial++;


           
           ?>


                   <tr>
                        
                        <td><?php echo "$username"; ?></td>
                        
                        <td><?php echo "$Comapany_name"; ?></td>
                        <td><?php echo "$request_amount"; ?></td>

                        




                        <?php    if($status=="pending")
                                {?>
                        <td style="padding: 2px 4px;
     background-color: #e0532c;
    width:10px;
    height:10px;
    align:center;
    color: var(--white);
    border-radius: 4px;
    font-size: 16px;
    font-weight: 500;"><?php echo "$status"; ?></td>
                               <?php }else{

                                            ?>
<td style="padding: 2px 4px;
background-color: #8de02c;
width:10px;
height:10px;
align:center;
border-radius: 4px;
font-size: 16px;
font-weight: 500;"><?php echo "$status"; ?></td>




                           <?php    }
                                ?>



<?php    if($status_2=="not-accepted")
                                {?>
                        <td style="padding: 2px 21px;
     background-color: red;
    width:15px;
    height:10px;
    align:center;
    color: var(--white);
    border-radius: 4px;
    font-size: 16px;
    font-weight: 500;"><?php echo "$status_2"; ?></td>
                               <?php }else{

                                            ?>
<td style="padding: 2px 21px;
background-color: green;
width:15px;
height:10px;

border-radius: 4px;
font-size: 16px;
font-weight: 500;"><?php echo "$status_2"; ?></td>




                           <?php    }
                                ?>
                        
                        
                       

                       
                    </tr>

<?php } ?>

                        </tbody>
                     </table>

                </div>

    <?php } }?>
 

                     <!-- user start -->

            <div class="recentcustomer">
                <div class="cardHeader">
                    <h2>Recent customer</h2>
                    
                </div>
                <table>

                <?php

$query="SELECT * FROM `card_information_all`";
    
$result=mysqli_query($connnection,$query);



$count=mysqli_num_rows($result);

if($count>0){    
            
               
                 
            $serial=0;
   while($row=mysqli_fetch_assoc($result)){
   
        $username=$row['username'];
        $id=$row['id'];
        $profile_pic=$row['card-photo'];
        $Comapany_name=$row['company-name'];
        $request_amount=$row['investment-amount'];
        $entro_photo=$row['entro-photo'];
        
        $serial++;


      
      ?>


                    <tr>
                        <td width="60px">
                            <div class="imgbox"><img src="../Home/entroProfile/<?php echo $entro_photo; ?>"></div>
                        </td>
                        <td><h4><?php echo "$username"; ?><br><span><?php echo "$Comapany_name"; ?></span></h4></td>
                    </tr>

   <?php }}?>
                </table>
            </div>
            <!-- user end -->


            </div>
            <!-- details end-->



            

            
          </div><!-- main div -->
     
        </div><!-- container div -->

        

        
         
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script type="text/javascript" src="Admin_all_js/my_chart.js"></script>
        <script> chartFunction(investorcount,entrocount);</script>       


