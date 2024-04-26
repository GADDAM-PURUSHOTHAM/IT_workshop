<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];// Process the data (e.g., store in database, send email, etc.)
// For simplicity, just echoing here
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Message: $message <br>";
}
?>
