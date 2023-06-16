<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email
    $to = "noreply@bitsilco.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    // Send email
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We'll get back to you soon.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
