<?php

$quoteSubmitted = isset($_POST['submit']);

if ($quoteSubmitted) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $fromEmail = $_POST['email'];
  $quoteDetails = $_POST['details'];
  $body = "";
  $emailTo = "info@crystalhills.org";

   $body .= "Name: ";
    $body .= $name;
    $body .= "\n";

    $body .= "Email: ";
    $body .= $fromEmail;
    $body .= "\n";

    $body .= "Message: ";
    $body .= $quoteDetails;
    $body .= "\n";

     $success = mail($emailTo, $subject, $body, "From:" .$fromEmail);

$success = TRUE;
     if ($success) 
     {
        $response = TRUE;
     }
     else {
       $response = FALSE;
     }
}
