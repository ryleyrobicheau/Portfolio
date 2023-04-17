<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the email recipient, subject, and message body
  $to = "ryleyrobicheau@gmail.com";
  $subject = "New contact form submission from $firstName $lastName";
  $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMessage: $message";

  // Send the email
  mail($to, $subject, $body);

  // Redirect the user to a confirmation page
  header("Location: thank-you.html");
  exit();
}
?>