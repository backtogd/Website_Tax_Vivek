<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Replace with your actual email address
    $to = "vivekbxr528@gmail.com"; 
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, $name. We will get back to you shortly!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
