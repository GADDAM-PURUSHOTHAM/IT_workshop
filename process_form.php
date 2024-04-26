<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Message: $message <br>";
}
?>
