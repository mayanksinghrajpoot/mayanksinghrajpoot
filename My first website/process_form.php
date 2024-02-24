<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];

    $to = "mayanksinghrajpoot04@gmail.com";  // Replace with your email address
    $subject = "New Comment from your website";
    $message = "Name: $name\nEmail: $email\nComments: $comments";

    mail($to, $subject, $message);
}
?>   