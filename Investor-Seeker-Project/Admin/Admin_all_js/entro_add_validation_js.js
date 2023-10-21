const form = document.getElementById('form');
const firstName = document.getElementById('firstname');
const lastName = document.getElementById('lastname');
const username = document.getElementById('username');
const nid = document.getElementById('nid');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirm_password');
const profile = document.getElementById('pictur');




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
      if(formCount[i].className === "form_control success"){
         count++;   
      }
   }
    //  alert(count+" "+countTotalForm)
   
   if(count === countTotalForm){
      return true ;
   }else{
      return false
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
     

    //  event.preventDefault();

     
 
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
         
        //  swal("Account Created Successfully!", "Now press ok to Login!", "success");
         alert("Entrepreneur added successfully");

         return true;
   }else{
     return false;
   }


   return false;
}


function setErrormsg(input ,errorMsg)

  {
      const form_control = input.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "form_control error";
      small.innerText = errorMsg;

  }

  function setSuccess(input)

  {
      const form_control = input.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "form_control success";
      
  }



//   document.getElementById('form').addEventListener('submit', function (event) {
//             event.preventDefault(); // Prevent the form from submitting by default
//             if (validate()) {
//                 // If the form is valid, submit it
//                 this.submit(); // "this" refers to the form element
//             }
//         });