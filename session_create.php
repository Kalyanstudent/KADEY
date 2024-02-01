<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: home.php");
    exit();
}

// Display the dashboard content
echo "Welcome, " . $_SESSION['username'] . "! This is your dashboard.";

// Add your dashboard content here

// Logout link
echo "<br><a href='logout.php'>Logout</a>";
?>
