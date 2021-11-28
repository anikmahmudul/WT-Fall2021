function validateForm() {
    var user_name = document.getElementById("user_name").value;
    var email = document.getElementById("email").value;
    var user_mobile = document.getElementById("user_mobile").value;
    var user_password = document.getElementById("user_password").value;
    var user_password_confirm = document.getElementById(
      "user_password_confirm"
    ).value;
  
    if (
      user_name == "" ||
      email == "" ||
      user_mobile == "" ||
      user_password == "" ||
      user_password_confirm == ""
    ) {
      document.getElementById("message").innerHTML =
        "Please Enter All The Fields";
      document.getElementById("message").style.padding = "10px";
      document.getElementById("profession").checked = true;
      return false;
    }
    return true;
  }
  
  function ValidateEmail(mail) 
  { 
      if 
      (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)) 
      { 
          return (true) } 
          alert("You have entered an invalid email address!") 
          return (false)
         }