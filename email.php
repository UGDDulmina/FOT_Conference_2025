<?php
require 'smtp_server.php'; // Include the SMTP mail function

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Email details
    $to = "lahirusashika@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=utf-8";

    // Email body
    $body = "You have received a new message from $name ($email):\n\n$message";

    // Send the email
    try {
        sendSMTPMail($to, $subject, $body, $headers); // Call the SMTP function
        echo "Your message has been sent successfully!";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Failed to send your message. Please try again later.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
