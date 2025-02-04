<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "giabaoworking362004@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Your message has been sent.";
}
echo "Your message has been sent.";
?>
