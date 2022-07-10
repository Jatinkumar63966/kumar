<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
"User Email: $name.\n".
"Subject: $name.\n".
"User Message: $name.\n";

$to = "jatinkumar63966@gmail.com";
$headers = "Form: $email_form \r\n";
$headers .="Replt-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>