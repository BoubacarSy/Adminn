<?php
session_start();

// Hardcoded admin credentials (for demonstration purposes)
$admin_username = "admin";
$admin_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if ($username === $admin_username && $password === $admin_password) {
    // Login successful
    $_SESSION["admin_logged_in"] = true;
    header("Location: admin_dashboard.php"); // Redirect to the admin dashboard
    exit();
  } else {
    // Login failed
    echo "<script>alert('Invalid username or password'); window.location.href = 'admin_login.html';</script>";
  }
}
?>