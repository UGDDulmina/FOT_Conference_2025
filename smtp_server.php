<?php
function sendSMTPMail($to, $subject, $message, $headers) {
    // SMTP server configuration
    
    $smtpServer = 'smtp.gmail.com'; // Change for your provider
    $port = 587; // TLS port (use 465 for SSL)
    $username = 'lahirusashika@gmail.com'; // Your email address
    $password = 'zmlarzspclmmblmz'; // Your app key/password

    // Create a connection to the SMTP server
    $connection = stream_socket_client("tcp://$smtpServer:$port", $errno, $errstr, 30);
    if (!$connection) {
        throw new Exception("Failed to connect to SMTP server: $errstr ($errno)");
    }

    // Helper function to write and read commands
    function writeCommand($connection, $command) {
        fwrite($connection, $command . "\r\n");
        return fgets($connection, 512);
    }

   
      // SMTP server configuration
      $smtpServer = 'smtp.gmail.com'; // Change for your provider
      $port = 587; // TLS port (use 465 for SSL)
      $username = 'lahirusashika@gmail.com'; // Your email address
      $password = 'zmlarzspclmmblmz'; // Your app key/password
  
      // Create a connection to the SMTP server
      $connection = stream_socket_client("tcp://$smtpServer:$port", $errno, $errstr, 30);
      if (!$connection) {
          die("Failed to connect to SMTP server: $errstr ($errno)");
      }
  
      // Initiate communication with the SMTP server
      fwrite($connection, "EHLO " . gethostname() . "\r\n");
      fread($connection, 512);
  
      // Start TLS encryption
      fwrite($connection, "STARTTLS\r\n");
      fread($connection, 512);
      stream_socket_enable_crypto($connection, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
  
      // Re-initiate communication after enabling TLS
      fwrite($connection, "EHLO " . gethostname() . "\r\n");
      fread($connection, 512);
  
   // Authenticate with the SMTP server
   fwrite($connection, "AUTH LOGIN\r\n");
   fread($connection, 512);
   fwrite($connection, base64_encode($username) . "\r\n");
   fread($connection, 512);
   fwrite($connection, base64_encode($password) . "\r\n");
   fread($connection, 512);

   // Send the MAIL FROM command
   fwrite($connection, "MAIL FROM:<$username>\r\n");
   fread($connection, 512);

   // Send the RCPT TO command
   fwrite($connection, "RCPT TO:<$to>\r\n");
   fread($connection, 512);

   // Send the DATA command
   fwrite($connection, "DATA\r\n");
   fread($connection, 512);

   // Send the email headers and body
   $emailContent = "Subject: $subject\r\n";
   $emailContent .= "$headers\r\n\r\n";
   $emailContent .= "$message\r\n.\r\n";

   fwrite($connection, $emailContent);
   fread($connection, 512);

   // Close the connection
   fwrite($connection, "QUIT\r\n");
   fclose($connection);

}
?>
