<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "okechukwuchinonso440@gmail.com";  
    $subject = "New Contact Form Submission: $TryTutor";
    $messageBody = "Name: $\nEmail: $email\nSubject: Inquiry $subject\nMessage:\n$message";

    mail($to, $subject, $messageBody);

    header("Location: thank-you.html");
    exit();
}
?>
