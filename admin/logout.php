<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["uname"]) && isset($_SESSION["pass"])) {
    // Unset or clear the session variables
    unset($_SESSION["uname"]);
    unset($_SESSION["pass"]);
}

// Redirect the user to the login page
header("Location: index.php");
exit();
?>
