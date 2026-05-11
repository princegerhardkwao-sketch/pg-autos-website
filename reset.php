<?php
include 'db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    if (isset($_POST['update'])) {
        $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $conn->query("UPDATE users 
                      SET password='$newPassword', reset_token=NULL 
                      WHERE reset_token='$token'");

        echo "Password updated!";
    }
}
?>

<form method="POST">
    <input type="password" name="password" placeholder="New Password" required>
    <button name="update">Update Password</button>
</form>