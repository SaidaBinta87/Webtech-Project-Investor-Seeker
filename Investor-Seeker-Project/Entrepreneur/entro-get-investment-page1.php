
<?php session_start();?>

<?php
$connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');


if (!$connnection) {
die("Connection failed: " . mysqli_connect_error());
}


if(isset($_REQUEST['submit'])){

$entrepreneurName = mysqli_real_escape_string($connnection,$_REQUEST["name"]);
$entrepreneurPost = mysqli_real_escape_string($connnection,$_REQUEST["Entrepreneur-post"]);
$entrepreneurEducation = mysqli_real_escape_string($connnection,$_REQUEST["education"]);
$idea_email = mysqli_real_escape_string($connnection,$_REQUEST["email"]);
$idea_phone = mysqli_real_escape_string($connnection,$_REQUEST["phone"]);
$idea_Business_type = mysqli_real_escape_string($connnection,$_REQUEST["Business-type"]);
$idea_companyName = mysqli_real_escape_string($connnection,$_REQUEST["company-name"]);
$idea_location = mysqli_real_escape_string($connnection,$_REQUEST["location"]);
$idea_descrioption = mysqli_real_escape_string($connnection,$_REQUEST["product-description"]);
$idea_Product_usecase_1 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-1"]);
$idea_Product_usecase_2 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-2"]);
$idea_Product_usecase_3 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-3"]);
$idea_Product_usecase_4 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-4"]);
$idea_revenue = mysqli_real_escape_string($connnection,$_REQUEST["revenue"]);
$idea_lastMSell = mysqli_real_escape_string($connnection,$_REQUEST["lmonthsell"]);
$idea_lastYSell = mysqli_real_escape_string($connnection,$_REQUEST["lyearsell"]);
$idea_totalSell = mysqli_real_escape_string($connnection,$_REQUEST["totalsell"]);
$idea_amountofInvestmentRequired = mysqli_real_escape_string($connnection,$_REQUEST["investment-amount"]);
$idea_Equity_offer = mysqli_real_escape_string($connnection,$_REQUEST["Eoffer"]);
$idea_Investment_purpose = mysqli_real_escape_string($connnection,$_REQUEST["investment-purpose"]);
$idea_Goal = mysqli_real_escape_string($connnection,$_REQUEST["goal"]);



// $company_logo = mysqli_real_escape_string($connnection,$_REQUEST["company_logo"]);
$logo_picture=$_FILES['company_logo'];
$logo_pic_name=$logo_picture['name'];
$logo_pic_tmp_name=$logo_picture['tmp_name'];

$name_changerrr=uniqid().".png";



// -------------------------------------------------------------------------

$arr = $arr_history = array('cover1.jpeg', 'cover2.jpg', 'cover3.jpg', 'cover4.jpg','cover5.jpg','cover6.jpg','cover7.jpg');
$arr_history = $arr;
$key = array_rand($arr_history, 1);
$selected = $arr_history[$key];
$selected_cover = $selected . PHP_EOL;

// -------------------------------------------------------------------------
// -------------------------------------------------------------------------
// -------------------------------------------------------------------------

$currentDate = date('Y-m-d'); 

$picture=$_FILES['picture-card'];
$pname=$picture['name'];
$tmp_name=$picture['tmp_name'];
$name_changer=uniqid().".png";


$queryy="SELECT email FROM `card_information_all` WHERE email='$idea_email'";
$res=mysqli_query($connnection,$queryy) or die("Query failed.");

$cnt=mysqli_num_rows($res);

if($cnt>0){
// echo "This Email already used";
}else{


// --------------------------------------------------------
if(!empty($logo_pic_name)){

$location='all_pictures/company_logo/';

if(move_uploaded_file($logo_pic_tmp_name,$location.$name_changerrr)){


}else{
  echo 'upload failed';
  die("wait");
}

}else{
echo 'file not found';
}
// ----------------------------------------------------------

if(!empty($pname)){

$locat='all_pictures/card-photo/';

if(move_uploaded_file($tmp_name,$locat.$name_changer)){


}else{
 echo 'upload failed';
 die("wait");
}

}else{
echo 'file not found';
}




require "../Admin/includes/configure.php";
  if(!$connnection){

die("not connected".mysqli_error());
}else{

$entro_profile_for_card=$_SESSION['photo_show_entro'];

$sqlin= "INSERT INTO `card_information_all` (`username`, `entro-photo`, `card-photo`, `cover-photo`, `company-logo`, `name`, `entrepreneur-post`, `education`, `email`, `phone`, `business-type`, `company-name`, `location`, `product-description`, `product-usecase-1`, `product-usecase-2`, `product-usecase-3`, `product-usecase-4`, `revenue`, `last-month-sell`, `last-year-sell`, `total-sell`, `investment-amount`, `equity-offer`, `investment-purpose`, `goal`, `status-of-post`, `status-of-request`, `date-of-post`) VALUES ('$userName', '$entro_profile_for_card', '$name_changer', '$selected_cover', '$name_changerrr', '$entrepreneurName', '$entrepreneurPost', '$entrepreneurEducation', '$idea_email', '$idea_phone', '$idea_Business_type', '$idea_companyName', '$idea_location', '$idea_descrioption', '$idea_Product_usecase_1', '$idea_Product_usecase_2', '$idea_Product_usecase_3', '$idea_Product_usecase_4', '$idea_revenue', '$idea_lastMSell', '$idea_lastYSell', '$idea_totalSell', '$idea_amountofInvestmentRequired', '$idea_Equity_offer', '$idea_Investment_purpose', '$idea_Goal', 'pending', 'not-accepted', '$currentDate')";

$result=mysqli_query($connnection,$sqlin);


if($result){

header("location:entCard.php?inserted");
//<script> window.location.href = "location:entCard.php";
}else{
echo "not inserted";
}

}

}

}


mysqli_close($connnection);
?>


<?php

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}





$userName=$_SESSION['usrName'];
?>


<!DOCTYPE html>
<html>
    <head>
        <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="all_css/get_investment1.css">
            <link rel="stylesheet" href="all_css/entro_main_style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <style>
              

              </style>

    </head>

    <body>

        <!-- <header>
            <div class="logo-container">
              <h1>Investor<span>Seeker</span></h1>
            </div>
            <div class="exit-container">
              <a href="investor_showProfile_first_Get_start.php">Exit</a>
            </div>
          </header> -->

          <?php require "include/Header_entro_home.php";?>

          <div id="progress-container">
            <div id="progress-bar"></div>
          </div>

          
<br>

<script>
var i = 1;
var width=1;

function move(a) {
  var elem = document.getElementById("progress-bar");

    if(a==5){
      i++;
    }else if(a==2){
      i--;
    }

    width = i*33.33;
    elem.style.width = width + "%";


}
</script>


              
        <section id="get-investment">
            <div class="container">
              <h2>Get Investment Today</h2>
              <h3>Join with Some Talented Investors</h3>
              <form action="" id="investment-form" method="post" enctype="multipart/form-data">
                <div class="step step-one">
                  <h4>Step 1: Personal Information</h4>
                  <label for="name">Entrepreneur Name</label>
                  <input type="text" id="name" name="name" required>

                  <label for="Entrepreneur-post">Entrepreneur description</label>
                  <input type="text" id="Entrepreneur-post" name="Entrepreneur-post" required>

                  <label for="Education">Education</label>
                  <input type="text" id="education" name="education" required>

                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
                  <label for="phone">Phone</label>

                  <input type="tel" id="phone" name="phone" required>
                  <button onclick="move(5)" type="button" class="next-button">Next</button>

                </div>
                <div class="step step-two">
                  <h4>Step 2: Business Details</h4>

                  <label for="Business-type">Business type</label>
                  <input type="text" id="Business-type" name="Business-type" required>

                  <label for="company-name">Company Name</label>
                  <input type="text" id="company-name" name="company-name" required>

                  <label for="location">Comany Location</label>
                  <input type="text" id="location" name="location" required>


                  <!-- --------------- -->

                  <label for="product-description">What you are launching</label>
                  <input type="text" id="product-description" name="product-description" required>

                  <label for="product-usecase-1">Product use case-1</label>
                  <input type="text" id="product-usecase-1" name="product-usecase-1" required>

                  <label for="product-usecase-2">Product use case-1</label>
                  <input type="text" id="product-usecase-2" name="product-usecase-2" required>

                  <label for="product-usecase-3">Product use case-3</label>
                  <input type="text" id="product-usecase-3" name="product-usecase-3" required>

                  <label for="product-usecase-4">Product use case-4</label>
                  <input type="text" id="product-usecase-4" name="product-usecase-4" required>





                  

                  <!-- --------------- -->




                  <label for="revenue">Revenue</label>
                  <input type="text" id="revenue" name="revenue" required>

                  <label for="revenue">Last Month sell</label>
                  <input type="text" id="lmonthsell" name="lmonthsell" required>

                  <label for="revenue">Last year Sell</label>
                  <input type="text" id="lyear sell" name="lyearsell" required>


                  <label for="revenue">Total sell</label>
                  <input type="text" id="totalsell" name="totalsell" required>

                  

                  <button onclick="move(2)" type="button" class="prev-button">Previous</button>
                  <button onclick="move(5)" type="button" class="next-button">Next</button>

                </div>
                <div class="step step-three">
                  <h4>Step 3: Investment Requirements</h4>
                  <label for="investment-amount">Amount of Investment Required in tk</label>
                  <input type="text" id="investment-amount" name="investment-amount" required>

                  <label for="euity-offer">Equity Offer in %</label>
                  <input type="text" id="Eoffer" name="Eoffer" required>

                  <label for="investment-purpose">Purpose of Investment</label>
                  <input type="text" id="investment-purpose" name="investment-purpose" required>

                  <label for="goal">What is the goal of this comapny </label>
                  <input type="text" id="goal" name="goal" required>

                  <div class="file">

                  <label for="pitch-deck">Add card photo</label>
                  <input type="file" id="pitch-deck" name="picture-card">

                  <label for="pitch-deck">Add company logo</label>
                  <input type="file" id="pitch-deck" name="company_logo">

                  </div>
                  <button onclick="move(2)" type="button" class="prev-button">Previous</button>
                  <button type="submit" name="submit" class="submit-butn">Submit</button>
                </div>
              </form>
            </div>
          </section>
          <!-- <?php

// ?> -->


         






          <script>
            const form = document.querySelector('#investment-form');
            const prevButtons = document.querySelectorAll('.prev-button');
            const nextButtons = document.querySelectorAll('.next-button');
            const steps = form.querySelectorAll('.step');

             let currentStep1 = 0;


function showStep(stepIndex) {
  steps[currentStep1].classList.remove('active');
  steps[stepIndex].classList.add('active');
  currentStep1 = stepIndex;
  updateButtons();
}


function updateButtons() {
  if (currentStep1 === 0) {
    prevButtons[0].disabled = true;
  } else {
    prevButtons[0].disabled = false;
  }

  if (currentStep1 === steps.length - 1) {
    nextButtons[0].style.display = 'none';
    form.querySelector('button[type="submit"]').style.display = 'inline-block';
  } else {
    nextButtons[0].style.display = 'inline-block';
    form.querySelector('button[type="submit"]').style.display = 'none';
  }
}


function nextStep() {
  showStep(currentStep1 + 1);
}


function prevStep() {
  showStep(currentStep1 - 1);
}


nextButtons.forEach(button => {
  button.addEventListener('click', nextStep);
});

prevButtons.forEach(button => {
  button.addEventListener('click', prevStep);
});


          showStep(0);
          updateButtons();

          </script>
          
          



          
          

    </body>
</html>