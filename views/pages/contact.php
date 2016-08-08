<?php
// define variables and set to empty values
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if (isset($_REQUEST['submitted'])) {
	  if (empty($errors)) { 
	  $from = $email; //sender's email
	  // Change this to your email address you want to form sent to
	  $to = "niamhclairemulholland@gmail.com"; 
	  $subject = "Personal website -- contact form sent by" . $name . "";
	  
	  $message = "Message from " . $name;
	  mail($to,$subject,$message,$from);
	  }
	}
?>