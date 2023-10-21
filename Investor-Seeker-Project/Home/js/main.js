const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

function validateForm() {
	const firstname = document.forms["myForm"]["firstname"].value;
	const lastname = document.forms["myForm"]["lastname"].value;
	const username = document.forms["myForm"]["username"].value;
	const nid = document.forms["myForm"]["nid"].value;
	const email = document.forms["myForm"]["email"].value;
	const password = document.forms["myForm"]["password"].value;
	const confirm_password = document.forms["myForm"]["confirm_password"].value;
	const profile_picture = document.forms["myForm"]["profile_picture"].value;
  
	if (firstname === "") {
	  alert("First name must be filled out");
	  return false;
	}
  
	if (lastname === "") {
	  alert("Last name must be filled out");
	  return false;
	}
  
	if (username === "") {
	  alert("Username must be filled out");
	  return false;
	}
  
	if (nid === "") {
	  alert("NID must be filled out");
	  return false;
	}
  
	if (email === "") {
	  alert("Email must be filled out");
	  return false;
	}
  
	if (password === "") {
	  alert("Password must be filled out");
	  return false;
	}
  
	if (confirm_password === "") {
	  alert("Confirm password must be filled out");
	  return false;
	}
  
	if (password !== confirm_password) {
	  alert("Passwords do not match");
	  return false;
	}
  
	if (profile_picture === "") {
	  alert("Profile picture must be uploaded");
	  return false;
	}
  
	// If all the fields are valid
	return true;
  }
  function validateloginForm() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (username == "") {
      alert("Please enter your username");
      return false;
    }

    if (password == "") {
      alert("Please enter your password");
      return false;
    }
  }
  
