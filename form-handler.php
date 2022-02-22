<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subjet = $_POST['subjet'];
$message = $_POST['message'];

$email_from = 'info@zpacko.com';
$email_subjet = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subjet: $subjet.\n".
                "User Message: $message.\n";

$to = 'raul.cal.bar@gmail.com'
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subjet, $email_body,$headers);
header("Location: contact.html");
?>