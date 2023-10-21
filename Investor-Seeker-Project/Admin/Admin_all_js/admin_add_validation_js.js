
const form = document.getElementById('form');
const name = document.getElementById('name');
const username = document.getElementById('username');
const role = document.getElementById('role');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('password2');
const picture = document.getElementById('pic');



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

   
   
  // alert(count+" "+countTotalForm);
   
   if(count === countTotalForm){
      return true ;
   }else{
      return false
   }
 }



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



function validate()
{
    // event.preventDefault();

    // return false;
    const nameValue = name.value.trim();
    const usernameValue = username.value.trim();
    const roleValue = role.value.trim();
    
    const passwordValue = password.value.trim();
    const confirmPassworValue = confirmPassword.value.trim();
    const pictureValue = picture.value.trim();

    // name

    if(nameValue === ""){
        setErrormsg(name, 'name cannot be blank');
    }
    else if(nameValue.length <= 3){
        setErrormsg(name, 'name mush be minimum 4 charecter');
    }else{
         setSuccess(name);
    }


    // pictureValue

    if(pictureValue === ""){
        setErrormsg(picture, 'Select a Profile');
    }
    else{
         setSuccess(picture);
    }

    // role

    if(roleValue === ""){
        setErrormsg(role, 'Select a Role');
    }
    else{
         setSuccess(role);
    }

    // username

    if(usernameValue === ""){
        setErrormsg(username, 'Username cannot be blank');
    }
    else if(usernameValue.length <= 3){
        setErrormsg(username, 'Username mush be minimum 4 charecter');
    }else{
         setSuccess(username);
    }


  //  password 

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


  //  confirm password 

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



   if(successMessage()){
         alert("Admin Added successfully");
        //  swal("Good job!", "You clicked the button!", "success");

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
