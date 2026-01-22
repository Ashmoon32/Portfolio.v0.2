<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $data = "Name: " . $name . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Message: " . $message . "\n";
    $data .= "-------------------------------\n";

    file_put_contents('messages.txt', $data, FILE_APPEND | LOCK_EX);
}

?>