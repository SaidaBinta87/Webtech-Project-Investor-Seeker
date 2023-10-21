

<head>
            <meta charset="UTF-8"/>
              <!-- <link rel="stylesheet" href="css/practice_style.css"/>  -->
            <link rel="stylesheet" href="css/header_css.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
  
    </style>
</head>


<body>
  


<div class="nav">
      <h2 onclick="location.href='home.php'">Investor<span class="span">Seeker</span></h2>
        <div class="item">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="ContactUS.php">Contact</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="team.php">Team</a></li>
                <input onclick="location.href='loginForm.php'" type="submit" name="sign_in" value="Sign In">
                <div class="toog_btn">
                <i class="fa-solid fa-bars"></i>
                </div>
            </ul>
           
        </div>
    </div>

    <div class="dropdown_menu ">
       <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="ContactUS.php">Contact</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="team.php">Team</a></li>
       <li><button onclick="location.href='loginForm.php'" class="sign-up-button button">Sign In</button></li>
       </ul>
      </div>



<script>
 const toggleBtn=document.querySelector('.toog_btn');
 const toggleIcn=document.querySelector('.toog_btn i');
 const dropdownMenu=document.querySelector('.dropdown_menu');

 toggleBtn.onclick = function()
 {
     dropdownMenu.classList.toggle('open')
     const isOpen=dropdownMenu.classList.contains('open')
     toggleIcn.classList=isOpen
     ?'fa-solid fa-xmark'
     :'fa-solid fa-bars'

     
 }
 

 window.addEventListener("scroll", function() {
  
    var navigation = document.querySelector(".navvigartion");
    if (navigation) {
        navigation.classList.toggle("sticky", window.scrollY > 0);
    }
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="js/practice_script.js"></script>   

</body>
</html>
