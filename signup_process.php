<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['firstName'] ?? '';
    $lastName  = $_POST['lastName'] ?? '';
    $gender    = $_POST['gender'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone     = $_POST['number'] ?? '';

    $sql = "INSERT INTO users (firstName, lastName, gender, email, password, phone)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $password, $phone);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $firstName;
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>