<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "your-email@example.com"; // Replace with your email
        $subject = "New Contact Form Message";
        $headers = "From: " . $email;

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "All fields are required.";
    }
}
?>