<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "keyurimodi231299@gmail.com";
    $headers = array("From: $email",
        "Reply-To: keyurimodi231299@gmail.com",
        "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);

    ini_set('SMTP', "localhost");
    ini_set('smtp_port', "587");
    ini_set('sendmail_from', "$email");

    $status = mail($to, $subject, $message, $headers);

    if ($status) {
        echo "<script>alert('Your mail has been sent!')</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again!')</script>";
    }
}
require_once "index.php";
?>
