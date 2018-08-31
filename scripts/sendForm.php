<?php

if(!isset($_POST['submit'])) {
    echo "Error; You need to submit form!";
}

//Collecting user info
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_web = $_POST['website'];
$message = $_POST['message'];

//Validate empty fields
if (empty($name)||empty($visitor_email)||empty($message)){
    echo "Name, Email address, and Message are Required.";
    exit;
}

//Set up incoming email format
$email_form = 'EckerleD85@gmail.com';
$email_subject = "New Form Submission";
$email_body = "You have received a new message from $name./n" "Email Address: $visitor_email/n" "Website: $visitor_web/n" "Message: /n$message"

$to = "EckerleD85@gmail.com";
$headers = "From $email_from\r\n";

//Send the Email 
mail($to, $email_subject, $email_body, $headers);
//done, redirect to Thank-you page

?>
