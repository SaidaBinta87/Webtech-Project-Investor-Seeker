

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/style1signup.css">

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/register.svg">
        </div>
        <div class="login-content">





        <form action="signUpCheak.php" method="post" enctype="multipart/form-data" onsubmit="return validate()" id="form">

                
                <h2 class="title">Signup</h2>




                <div class="input-div form_control">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Firstname</h5>
                        <input type="text" class="input" name="firstname" value="" id="firstname">
                        
                   </div>
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
                   
                </div>
               






                <div class="input-div form_control">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Lastname</h5>
                        <input type="text" class="input" name="lastname" id="lastname" value="">
                   </div>
                   <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
                </div>



                





                <div class="input-div form_control">
                <div class="i">
                  <i class="fas fa-user"></i>
                  </div>
                <div class="div">
                <h5>Username</h5>
                <input type="text" class="input" name="username" id="username" value="">
            </div>
            <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
                 </div>




               

             <div class="input-div form_control">
              <div class="i">
                <i class="fas fa-id-card"></i>
              </div>


            <div class="div">
                <h5>NID</h5>
                <input type="text" class="input" name="nid" id="nid" value="">
            </div>
            <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
      </div>


          







           <div class="input-div form_control">
               <div class="i">
                    <i class="fas fa-envelope"></i>
               </div>
               <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email" id="email" value="">
               </div>
               <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
            </div>



            <div class="input-div form_control">
               <div class="i">
                    <i class="fas fa-phone"></i>
               </div>
               <div class="div">
                    <h5>Phone</h5>
                    <input type="text" class="input" name="phone" id="phone" value="">
               </div>
               <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
            </div>
            

            <div class="input-div form_control">
               <div class="i">
                    <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password" id="password">
               </div>
               <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
            </div>
            

            <div class="input-div form_control">
               <div class="i">
                    <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                    <h5>Confirm Password</h5>
                    <input type="password" class="input" name="confirm_password"  id="confirm_password">
               </div>
               <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
            </div>
           

            <div class="input-div form_control">
               <div class="i">
               <i class="fas fa-image"></i>
               </div>
               <div class="div">
                    <h5>Profile Picture</h5>
                     <input class="profil" type="file" name="profile-pic" id="profile">
               </div>
               <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small> Error message</small>
            </div>
            
             
             <a href="loginForm.php">Already have account ? Login</a>
            <input type="submit" name="submit" class="btn" value="Signup as Entrepreneur">
            <input type="submit" name="submit2" class="btn" value="Signup as Investor">
        </form>



    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>



<!-- validation started  here  -->


<script type="text/javascript">



const form = document.getElementById('form');
const firstName = document.getElementById('firstname');
const lastName = document.getElementById('lastname');
const username = document.getElementById('username');
const nid = document.getElementById('nid');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm_password');
const profile = document.getElementById('profile');






// form.addEventListener('submit', (event) => {
//    event.preventDefault();
//     validate();
   
//  });


 


 function successMessage()
 {
   let formCount= document.getElementsByClassName('form_control');
   let count =0;
   let countTotalForm = formCount.length;

 

   for(let i=0; i<formCount.length ;i++)
   {
      if(formCount[i].className === "input-div form_control success"){
        
         count++;   
      }
   }



//    alert(count+" "+countTotalForm);

   
   
  
   
   if(count === countTotalForm){
      return true ;
   }else{
      return false;
   }

 }


// for email


 function isEmail(emailValue) {

     

    let atSymbol = emailValue.indexOf('@');
    if (atSymbol <= 1) {
        return false;
    }

    let dotPosition = emailValue.lastIndexOf('.');

    if (dotPosition <= atSymbol + 3) {
        return false;
    }

    if (dotPosition === emailValue.length - 1) {
        return false;
    }

    return true;
}



//for password

function isStrong(passwordValue) {
    let countChar = 0;
    let countNumber = 0;

    for (let i = 0; i < passwordValue.length; i++) {
        const charCode = passwordValue.charCodeAt(i);

        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
            countChar++;
        }
        if (charCode >= 48 && charCode <= 57) {
            countNumber++;
        }
    }

  
    if (countChar > 0 && countNumber > 0 && countChar + countNumber === passwordValue.length) {
        return true;
    } else {
        return false;
    }
}

//  is name for name validation 


function isName(firstNameVal)
{

     let len=firstNameVal.length;
     let countChar=0;

     for (let i = 0; i < firstNameVal.length; i++) {
        const charCode = firstNameVal.charCodeAt(i);

        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
            countChar++;
        }

     }


     if(len!=countChar)
     {
          return false;
     }else{

          return true;
     }


}





//  this one  is main  validation function 

function validate()

{
     

     // event.preventDefault();

     console.log("hello");
 
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();

    const usernameValue = username.value.trim();
    const nidValue = nid.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const passwordValue = password.value.trim();
    const confirmPassworValue = confirmPassword.value.trim();
    const profileValue = profile.value.trim();

   

if(profileValue === ""){
     
      
      setErrormsg(profile, 'Select a profile picture ');
  }
  else

  {
      setSuccess(profile);
  }

   
    // firstname

    

    if(firstNameValue === ""){
     
        setErrormsg(firstName, 'Firstname cannot be blank');
    }
    else if(!isName(firstNameValue)){
        setErrormsg(firstName, 'Firstname mush contain Only Alphabate');
    }else{
         setSuccess(firstName);
    }

    

    
    // lastname

    if(lastNameValue === ""){
        setErrormsg(lastName, 'Lastname cannot be blank');
    }
    else if(!isName(lastNameValue)){
        setErrormsg(lastName, 'Lastname mush contain Only Alphabate');
    }else{
         setSuccess(lastName);
    }



//     // username

    if(usernameValue === ""){
        setErrormsg(username, 'Username cannot be blank');
    }
    else if(usernameValue.length <= 3){
        setErrormsg(username, 'Username mush be minimum 4 charecter');
    }else{
         setSuccess(username);
    }

    //     //  nid 

    if(nidValue === ""){
      
      setErrormsg(nid, 'nid number cannot be blank');
  }
  else if(nidValue.length <= 4){
      setErrormsg(nid, 'nid mush be 5 digit');
  }else{
      setSuccess(nid);
  }



//    //  email 

    if(emailValue === ""){
      
        setErrormsg(email, 'Email cannot be blank');
    }
    else if(!isEmail(emailValue)){
        setErrormsg(email, 'Email is not valid');
    }else{
        setSuccess(email);
    }




//     //  phone 

    if(phoneValue === ""){
      
      setErrormsg(phone, 'Phone number cannot be blank');
  }
  else if(phoneValue.length != 11){
      setErrormsg(phone, 'Phone number is not valid');
  }else{
      setSuccess(phone);
  }



//   //  password 

  if(passwordValue === ""){
      
      setErrormsg(password, 'password cannot be blank');
  }
  else if(passwordValue.length <8){
      setErrormsg(password, 'Password must be minimum of 8 charecter');
  }else if(!isStrong(passwordValue)){
      setErrormsg(password, 'Must Contain Number and Charecter');
  }else{
      setSuccess(password);
  }


//   //  confirm password 

  if(confirmPassworValue === ""){
         setErrormsg(confirmPassword, 'Confirm password cannot be blank');
  }
  else if(confirmPassworValue.length <8){
      setErrormsg(confirmPassword, '*Confirm Password and password are not same');
  }else if(!isStrong(confirmPassworValue)){
      setErrormsg(confirmPassword, '**Confirm Password and password are not same');
  }
  else if(passwordValue != confirmPassworValue){
      setErrormsg(confirmPassword, 'Confirm Password and password are not same');
  }else{
      setSuccess(confirmPassword);
  }


  




// //  check
   if(successMessage()){


         
         alert("successsfully done");

         return true;
   }else{
     return false;
   }

}


function setErrormsg(input ,errorMsg)

  {
      const form_control = input.parentElement.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "input-div form_control error";
      small.innerText = errorMsg;

  }

  function setSuccess(input)

  {
      const form_control = input.parentElement.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "input-div form_control success";
      
  }



//   document.getElementById('form').addEventListener('submit', function (event) {
//             event.preventDefault(); // Prevent the form from submitting by default
//             if (validate()) {
//                 // If the form is valid, submit it
//                 this.submit(); // "this" refers to the form element
//             }
//         });

</script>
</body>
</html>