<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "habinezan.dyves@yahoo.com";
    $subject = "New Message from Contact Form";
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);
}

// Redirect to a thank you page or back to the form page
header("Location: index.html"); // Change this to your thank you page
exit();

?>
