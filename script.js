  /**
   * This function is responsible for validating the email entered by the user.
   * regex - This is the variable for storing the valid pattern.
   * mail - This is the variable for storing the email entered by the user.
   */
function validateEmail() {
  var mail = document.getElementById("email").value;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!mail.match(regex)) {
    document.getElementById("checkemail").innerHTML =
      "*Enter a valid email address!!";
    document.getElementById("submit").disabled = TRUE;
  } 
  else {
    document.getElementById("checkemail").innerHTML =
      '<span style="color:green">This email address is valid !!</span>';
    document.getElementById("submit").disabled = FALSE;
  }
}
