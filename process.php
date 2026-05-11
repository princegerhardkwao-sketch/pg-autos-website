<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Get user
$sql = "SELECT * FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {

        // CREATE SESSION HERE
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['firstName'];

        // REDIRECT AFTER LOGIN
        header("Location: homepage.php");
        exit();

    } else {
        echo "Wrong password";
    }

} else {
    echo "User not found";
}
?>