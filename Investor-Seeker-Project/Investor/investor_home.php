<?php 

session_start();

if(!isset($_SESSION['useRname']))
{
  header("location:../Home/loginForm.php");
}

?>


<!DOCTYPE html>
<html>
    <html lang="en-us">
    <head>
       <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="all_css/investor_home_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </head>



    <body>
      
       
    <?php require "include/inv_header.php";?>

    <!-- main body start --------------------------------------------------------------------------- -->
               
               
                   <div class="main_body_f">
                    <div class="container1">
                          
                     
                          
                    <div class="get-starts">
                        
    <h1>Unlock Your Investment Potential</h1>
    <h3>Discover Opportunities, Secure Your Future</h3>
    <a href="#" class="button">Get Started</a>
        <h4>Join Us Today and Prosper!</h4>

</div>

                       </div>
                  </div>




                <div class="secondpage1">
                       <div class="pagelayoutBox">
                               <div class="heading">
                                        <h1>Compelling Reasons to Start Investing</h1>
                               </div>

                        <div class="box">
                                 <div class="box1">
                                         <ion-icon name="flask-outline"></ion-icon>
                                         <h3>Explore Exciting Opportunities</h3>
                                         <a>Discover incredible investment prospects with innovative concepts</a>
                                 </div>

                                <div class="box1">
                                         <ion-icon name="cash-outline"></ion-icon>
                                         <h3>Unlock Financial Potential</h3>
                                         <a>Join our network of over 500 successful startups and investors</a>
                                </div>

                                <div class="box1">
                                        <ion-icon name="medal-outline"></ion-icon>
                                        <h3>Reap Exceptional Rewards</h3>
                                        <a>Experience remarkable rewards by engaging with our platform</a>
                               </div>
                        </div>
                 </div>

             </div>
                <!-- second page end -->     


                <!-- --------------------------------------------------------------------------------------- -->
                <!-- --------------------------------------------------------------------------------------- -->

         <?php       require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{
        $verified="verified";
        $request="not-accepted";
        $query = "SELECT * FROM `card_information_all` WHERE `status-of-post` = '$verified' AND `status-of-request` = '$request'";

        $result=mysqli_query($connnection,$query);



        $count=mysqli_num_rows($result);

        if($count>0){
        
           ?>




                <!-- --------------------------------------------------------------------------------------- -->
                <!-- --------------------------------------------------------------------------------------- -->

                       <!-- 1st page 1 start -->

                <div class="First_page_investor_mian">
                     <h2>Unlock Investment Opportunities</h2>
                     <p>Discover a diverse range of investment opportunities on our platform. Explore startups, businesses, and ventures seeking investment partners.</p>
                         <div class="boxmian">
                                   <h3>Expand Your Portfolio with Promising Ventures</h3>
                                   <p>Explore a variety of investment options and diversify your portfolio with startups and ventures across different industries. Invest in innovative projects that offer the potential for substantial returns.</p>
        
             <div class="swiper-container container">
                 <div class="swiper-wrapper">

        <!-- --------------------------------------------------------------------------------------- -->
                   <?php  
                   
                   while($row=mysqli_fetch_assoc($result)){
                  
                        $id=$row['id'];
                        $card_photoo=$row['card-photo'];
                        $company_name=$row['company-name'];
                        $investment_purpose=$row['investment-purpose'];
                        
                       
                   ?>


        <!-- --------------------------------------------------------------------------------------- -->

                 
                <div class="swiper-slide">
                    <div class="card">
                        <img src="../Entrepreneur/all_pictures/card-photo/<?php echo $card_photoo;?>" alt="Image 1">
                        <div class="bottom">
                            <h2><?php echo $company_name;?></h2>
                            <p class="par"><?php echo $investment_purpose;?></p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p>Rated: 4.9 out of 5 stars</p>
                            <a class="learn-more-button" href="investor_card_details_show_page.php?id=<?php echo $id?>">See more</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat this swiper-slide for each card -->
                
                 <?php  } }else{

                    echo "NO request available at this moment!";
                 } }?>
                <!-- Repeat this swiper-slide for each card -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- Card End -->
    </div>
</div>
<!-- 1st page 1 end-->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 2nd page start  -->



<div class="anotherSecondpage">

<h2>How Investors Like You are Achieving Their Goals</h2>
<div class="boxes">
    <div class="box1">
        <h3>Success Story 1</h3>
        <p>
            I'm excited to share that through strategic investments, I've been able to achieve remarkable financial growth. The guidance provided by this platform has been invaluable in making informed decisions.</p>
        <p> - John Anderson</p>
        <div class="fott">
            <a href="#">Explore Opportunities for Investment</a>
        </div>
    </div>

    <div class="box1">
        <h3>Success Story 2</h3>
        <p>
            My journey in the world of investments has been truly rewarding. Thanks to the platform's diverse offerings, I've witnessed exponential returns on investments across various industries.</p>
        <p> - Emily Roberts</p>
        <div class="fott">
            <a href="#">Discover Your Next Investment</a>
        </div>
    </div>

    <div class="box1">
        <h3>Success Story 3</h3>
        <p>
            The path to financial prosperity was illuminated by joining this investment platform. My portfolio has flourished through strategic collaborations, providing me with the means to secure a bright future.</p>
        <p> - Michael Lee</p>
        <div class="fott">
            <a href="#">Start Your Investment Journey</a>
        </div>
    </div>
</div>

    </div>


<!-- 2nd page  end -->
    <!-- --------------------------------------------------------------------------------------- -->
   
    <!-- --------------------------------------------------------------------------------------- -->
           <!-- 3rd vies page start  -->
 <div class="third_3rd_page_new">

    <h2>Investor are investing</h2>
    <div class="boxes2">

      <div class="swiper-container container">
        <div class="swiper-wrapper">


        <?php  

        if(!$connnection){
            die("not connected".mysqli_error());
       }else{
           $verified="verified";
           $request="not-accepted";

           $query = "SELECT * FROM `card_information_all` WHERE `status-of-post` = '$verified' AND `status-of-request` = '$request'";
   
           $result=mysqli_query($connnection,$query);
   
   
   
           $count=mysqli_num_rows($result);
   
           if($count>0){
           
              
                   
                   while($row=mysqli_fetch_assoc($result)){
                  
                        $id=$row['id'];
                        $card_photoo=$row['card-photo'];
                        $company_name=$row['company-name'];
                        $investment_purpose=$row['investment-purpose'];
                        
                        // echo $investment_purpose;  
                   ?>
            <div class="swiper-slide">
                <div class="card">
                    <img src="../Entrepreneur/all_pictures/card-photo/<?php echo $card_photoo;?>" alt="Image 1">
                    <div class="bottom">
                        <h2><?php echo $company_name;?></h2>
                        <p class="par"><?php echo $investment_purpose;?></p>
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                        <p>Rated: 4.9 out of 5 stars</p>
                        
                        
                        <a class="learn-more-button" href="investor_card_details_show_page.php?id=<?php echo $id?>">See more</a>
                        
                    </div>
                </div>
            </div>

        <?php  } }else{

echo "NO request available at this moment!";
}
    
    } ?>
            <!-- Repeat this swiper-slide for each card -->
            
            


           
    </div> <!-- swiper-container end -->
   


      
</div><!-- swiper-wrapper end -->


</div>

</div>
<!-- 3rd vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 5th vies page start   -->

<div class="fifth_5th_page_new_container">
<div class="mianBox">
    <div class="text_side_right">
        <h1><span>Empower</span> Your Investments</h1>
        <h3>Elevate your investment strategy with our platform</h3>
        <h2>Unlock a World of Investment Opportunities:</h2>
        <ul>
            <li>Discover a diverse range of potential investments</li>
            <li>Gain insights into emerging markets and trends</li>
            <li>Access expert analysis and tailored recommendations</li>
            <li>Stay informed about evolving financial landscapes</li>
        </ul>
        <div class="buttonn">
            <input type="button" class="but1" value="Get Started">
            <!-- <input type="button" value="Learn More"> -->
        </div>
    </div>
    <div class="image_side_left">
        <img src="photo/nus9.jpg" alt="Empower Your Investments">
    </div>
</div>

</div>

  <!-- 5th vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 4rd vies page start  -->
<div class="fourth_4rd_page_new">
    <h2 class="min">Top categories</h2>
<div class="boxesss">
<div class="boxesspart1">
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-laptop"></i>
        </div>
        <h2>Tech & Software</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <h2>E-Commerce</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-heartbeat"></i>
        </div>
        <h2>Healthcare</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-chart-line"></i>
        </div>
        <h2>Finance</h2>
    </div>
</div>
<div class="boxesspart1">
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-leaf"></i>
        </div>
        <h2>Energy & Sustainability</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-film"></i>
        </div>
        <h2>Entertainment & Media</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-utensils"></i>
        </div>
        <h2>Food & Beverage</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-building"></i>
        </div>
        <h2>Real Estate</h2>
    </div>
</div>
</div>
</div>
<!-- 4rd vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->

                <!-- 3rd -->

                <div class="third1">
                    <div class="trdbox">
                        <div class="part">
                        

                        <div class="boxes1">
                            <h1>57K</h1>
                            <h3>Investors</h3>
                        </div>

                        <div class="boxes1">
                            <h1>105K</h1>
                            <h3>Entrepreneur</h3>
                        </div>
                    </div>

                    <div class="part">
                        <div class="boxes1">
                            <h1>700K</h1>
                            <h3>Daily Visits</h3>
                        </div>

                        <div class="boxes1">
                            <h1>50K</h1>
                            <h3>Comments</h3>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- 3rd end-->





                <!-- 4th -->

                <section>
                <header>
                  <h1 style="font-size: 40px;">Getting Started as an Investor</h1>
                </header>

                     <div class="steps-container">
                           <div class="step">
                               <h3>Explore Investment Opportunities</h3>
                               <p>Browse through our curated selection of investment 
                                opportunities. Learn about various businesses, startups, 
                                and ventures seeking funding. Gain insights into their 
                                products, services, and growth potential.</p>
                          </div>

                          <div class="step">
                               <h3>Express Interest</h3>
                               <p>When you find an investment opportunity that aligns with 
                                your interests and goals, you can express your interest.
                                 This notifies the business owner of your potential 
                                 involvement and allows for further communication.</p>
                          </div>

                          <div class="step">
                               <h3>Engage and Invest</h3>
                               <p>Engage in discussions with business owners to understand 
                                their vision, plans, and investment requirements. Upon 
                                agreement, you can make your investment, contributing to 
                                the growth and success of the business.</p>
                         </div>
                   </div>

                </section>
                
                <!-- 4th -->



                <!-- 5th -->

                <section class="fifthpage">
                  <div class="testimonial-container">
                    <img src="photo/investor1.png" alt="Entrepreneur photo">
                    <div class="testimonial-details">
                         <h3>Emily Roberts</h3>
                         <p>"Investor Seeker has transformed my investment journey. Through their platform, I connected with innovative businesses that aligned with my investment goals. The seamless process and reliable support allowed me to confidently invest in promising ventures."</p>
                         <p>Prior to joining Investor Seeker, I encountered challenges in finding opportunities that matched my investment preferences. I struggled to identify businesses with potential and faced difficulties in establishing meaningful connections.</p>
                         <p>Discovering Investor Seeker was a turning point. The platform empowered me to create a comprehensive investor profile, outlining my preferences and investment focus. The tools provided enabled me to efficiently manage my investments and monitor emerging opportunities.</p>
                         <p>Within a short time of joining, I began receiving notifications about businesses seeking investments that aligned with my criteria. The platform facilitated direct communication with business owners, enabling thoughtful discussions and negotiations.</p>
                         <p>Investor Seeker has streamlined my investment journey, providing access to a curated selection of ventures and simplifying the investment process. Thanks to their platform, I've been able to make informed investments that have shown promising returns."</p>
                   </div>

                  </div>
                </section>
                
                <!-- 5th -->


                <!-- 6th -->

                <section class="six">
                   <h2>Your Investment Journey Made Simple</h2>
                      <div class="image-container">
                         <img src="photo/c1-footer.jpg" alt="Left Image">
                         <p>Discover a streamlined investment experience that frees you from complexities. Our platform provides a seamless avenue to explore, engage, and invest in promising ventures. We've crafted a tailored process to ensure your investments are efficient and effective.</p>
                         <img src="photo/c1-footer.jpg" alt="Right Image">
                     </div>
                  <a href="#">Explore Opportunities</a>

                </section>
                
                <!-- 6th -->


                <!-- 7th -->

                <section class="get-investment">
                  <div class="container">
                      <h2>Discover Investment Opportunities</h2>
                      <h3>Connect with a Network of Visionary Entrepreneurs</h3>
                        <a href="#" class="button">Explore Now</a>
                  </div>

                </section>
                
                <!-- 7th -->


                <?php require "../Entrepreneur/footer.php";?>
        <!-- ---------------------------------------------------------------------------------------- -->

            </div>  <!-- header mian  end -->
        
              
        </div> <!-- header home-loged  end -->
        
        
        


    </body>

        
</html>


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
             
            </script> 


<script>


const toggleBtn_pro=document.querySelector('.user');

const dropdownMenu_pro=document.querySelector('.dropdown_menu-profile');

toggleBtn_pro.onclick = function()
{
 dropdownMenu_pro.classList.toggle('onhoise')

}



</script> 

<script>
    var num=3;
  var swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: num, 
      spaceBetween: 20, 
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
  });
</script>