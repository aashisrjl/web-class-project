<!-- //logout process -->
<?php
session_start();
if (isset($_SESSION['email'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page with success message
    header('Location: ../pages/Login.php?msg=Logout successful');
} else {
    // If no session exists, redirect to login page with error message
    header('Location: ../pages/Login.php?err=No active session found');
}