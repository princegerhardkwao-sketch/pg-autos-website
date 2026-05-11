<?php
include 'db.php';

if (isset($_POST['reset'])) {
    $email = $_POST['email'];
    $token = md5(rand());

    $conn->query("UPDATE users SET reset_token='$token' WHERE email='$email'");

    echo "Password reset link: 
    http://localhost/reset.php?token=$token";
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter your email" required>
    <button name="reset">Reset Password</button>
</form>