<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
  header("Location: admin_login.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin_styles.css">
</head>
<body>
  <div class="dashboard-container">
    <h2>Admin Dashboard</h2>
    <form action="publish_article.php" method="POST">
      <div class="input-group">
        <label for="title">Article Title</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="input-group">
        <label for="content">Article Content</label>
        <textarea id="content" name="content" rows="10" required></textarea>
      </div>
      <button type="submit">Publish Article</button>
    </form>
    <a href="logout.php" class="logout-link">Logout</a>
  </div>
</body>
</html>