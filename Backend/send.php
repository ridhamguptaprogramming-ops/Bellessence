<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to = "youremail@gmail.com";


$email_subject = "New Contact Form Message: " . $subject;


$email_body = "Name: $name\n".
"Email: $email\n".
"Message:\n$message";


$headers = "From: $email";


if(mail($to, $email_subject, $email_body, $headers)){
echo "Success";
} else {
echo "Failed";
}
}
?>