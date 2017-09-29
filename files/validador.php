<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
//On submitting form below function will execute

function validarForm() {
  $hayErrores = false;
   if (empty($_POST["name"])) {
     $nameError = "Name is required";
     $hayErrores = true;
   } else {
     $name = test_input($_POST["name"]);

     if (filter_var($name, FILTER_VALIDATE_STRING)) {
       $nameError = "Only letters and white space allowed";
       $hayErrores = true;
     }
   }

   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid or not
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $emailError = "Invalid email format";
       $hayErrores = true;
     }
   }

   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check address syntax is valid or not(this regular expression also allows dashes in the URL)
     if(!filter_var($website, FILTER_VALIDATE_URL)){
       $websiteError = "Invalid URL";
       $hayErrores = true;
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderError = "Gender is required";
     $hayErrores = true;
   } else {
     $gender = test_input($_POST["gender"]);
   }
  return $hayErrores = true;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//php code ends here
//var_dump(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
//var_dump(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));


?>
