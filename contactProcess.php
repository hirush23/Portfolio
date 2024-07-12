<?php
$name = $_POST["name"];
$email = $_POST["email1"];
$message = $_POST["massage"];


require "connection.php";

if (empty($name)) {
    echo "Please Enter Your Name";
} else if (empty($email)) {
    echo "Please Enter Your Email";
} else if (empty($message)) {
    echo "Please Enter Your Message";
} else {



    Database::iud("INSERT INTO `portfolio`.`contact` (`name`, `email`, `message`) VALUES ('" . $name . "', '" . $email . "', '" . $message . "')");
    header('Location:index.php');
    exit;
}
