<?php
// Start session to persist login state
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // If user is not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Urbexcité | Prompt</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container">
      <ul class="promptLines" id="logsLines">
        <li><a target="_blank" href="58008.php">Log 58008</a></li>
        <li><a target="_blank" href="70007.php">Log 70007</a></li>
        <li><a target="_blank" href="71370.php">Log 71370</a></li>
        <li><a target="_blank" href="pdn-45.php">Log PDN-45</a></li>
      </ul>
    </div>
    <script src="script.js"></script>
  </body>