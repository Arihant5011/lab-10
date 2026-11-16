<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

// A new name came from the form: store it with the start time in the session.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && trim($_POST['name'] ?? '') !== '') {
    $_SESSION['name']  = trim($_POST['name']);
    $_SESSION['start'] = time();
}

// No session -> send back to the form.
if (!isset($_SESSION['name'])) { header("Location: index.php"); exit; }

$name  = htmlspecialchars($_SESSION['name']);
$start = date('d M Y, h:i:s A', $_SESSION['start']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hello <?= $name ?></title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="corner">Start time: <?= $start ?></div>
<main class="card">
  <h1>Hello, <?= $name ?>!</h1>
  <p>Glad to have you here.</p>
  <form action="logout.php" method="post">
    <button type="submit" class="btn danger">Logout</button>
  </form>
</main>
</body>
</html>
