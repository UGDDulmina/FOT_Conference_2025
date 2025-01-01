<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "ug.dinuja@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/plain; charset=utf-8";

    // Email body
    $body = "You have received a new message from $name ($email):\n\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        http_response_code(500);
        echo "Failed to send your message. Please try again.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
