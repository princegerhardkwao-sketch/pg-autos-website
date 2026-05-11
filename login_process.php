<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Find user by email
    $sql = "SELECT id, firstName, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['firstName'];
            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect password. <a href='login.php'>Try again</a>";
        }
    } else {
        echo "No account found with that email. <a href='signup.php'>Sign up</a>";
    }

    $stmt->close();
    $conn->close();
}
?>