<?php

class validate {

  public $email_error = '';

  /**
   * @param [str] $data - The parameter is the data entered by the user.
   * This function is for removing the extra spaces, slashes and special characters from the data entered.
   * @return string
   */
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  /**
   * @param [str] $text - This is the email entered by the user.
   * This function validates the email entered by the user.
   * @return void
   */
  function validate_Email($text) {
    if (empty($text)) {
      $this->email_error = "Email is required";
    } else {
      $email = $this->test_input($text);
      if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
        $this->email_error = "Enter a valid email";
      }
    }
  }

}

?>
