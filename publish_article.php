<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
  header("Location: admin_login.html");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];

  // Save the article to a file (for demonstration purposes)
  $article = "Title: $title\nContent: $content\n\n";
  file_put_contents("articles.txt", $article, FILE_APPEND);

  echo "<script>alert('Article published successfully!'); window.location.href = 'admin_dashboard.php';</script>";
}
?>