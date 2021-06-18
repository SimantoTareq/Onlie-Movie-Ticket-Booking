function validateFormSignup()
{
  var username= document.forms["signup"]["username"].value;
  var email= document.forms["signup"]["email"].value;
  var password= document.forms["signup"]["password"].value;
  var repassword= document.forms["signup"]["repassword"].value;

  if (username== "") {
    alert("Please Enter your Username!!!");
    return false;
  }

  if (email== "") {
    alert("Please Enter your Email!!!");
    return false;
  }

  if (password== "") {
    alert("Please Enter your Password!!!");
    return false;
  }
  if (password.length< 8 || password.length> 32) {
    alert("Password must be between 8-32 Character!!!");
    return false;
  }


  if (repassword== "") {
    alert("Please Re-type your Password!!!");
    return false;
  }
  if (password != repassword) {
    alert("Password doesnot Match!!!");
    return false;
  }

}



  