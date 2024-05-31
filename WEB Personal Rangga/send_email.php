<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'ranggarijasa2005@gmail.com';
    $subject = 'New Message from Contact Form';
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo '<script>alert("Your message has been sent successfully!");</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later.");</script>';
    }
}
?>