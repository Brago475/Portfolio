<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $details = $_POST["message"];


    $to = "jamesmardi475@gmail.com"; 
    $subject = "New message from portfolio contact form";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nDetails: $details";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
