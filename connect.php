<?php

$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "";       // default for XAMPP
$dbname = "Registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$gender    = $_POST['gender'];
$email     = $_POST['email'];
$password  = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure
$number    = $_POST['number'];

// Insert data
$sql = "INSERT INTO users (firstName, lastName, gender, email, password, number)
VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

