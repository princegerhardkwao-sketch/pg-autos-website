<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Invalid request.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    exit("Please fill in all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Please enter a valid email address.");
}

$to = "dupontten2010@gmail.com";
$subject = "New Contact Form Message";

$body = "Name: " . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "\r\n";
$body .= "Email: " . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "\r\n\r\n";
$body .= "Message:\r\n" . htmlspecialchars($message, ENT_QUOTES, "UTF-8");

$fromAddress = "no-reply@pgautosolution.com";
$headers = "From: Contact Form <{$fromAddress}>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $body, $headers, "-f{$fromAddress}")) {
    echo "Message sent successfully!";
} else {
    echo "Error sending message. Please try again later.";
}
?>