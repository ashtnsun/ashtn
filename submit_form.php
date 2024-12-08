<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $year = htmlspecialchars($_POST['year']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ashsun10141@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from your contact form:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Year: $year\n".
            "Phone: $phone\n".
            "Message: $message";
}
?>