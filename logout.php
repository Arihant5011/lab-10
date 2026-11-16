<?php
session_start();

if (!isset($_SESSION['name'], $_SESSION['start'])) { header("Location: index.php"); exit; }

$name    = htmlspecialchars($_SESSION['name']);
$seconds = time() - $_SESSION['start'];
$h = intdiv($seconds, 3600);
$m = intdiv($seconds % 3600, 60);
$s = $seconds % 60;
$duration = sprintf("%d hr %d min %d sec", $h, $m, $s);

// End the session after reading what we need.
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Logged out</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<main class="card">
  <h1>Thank You, <?= $name ?>!</h1>
  <p>You have been logged out.</p>
  <div class="rows">
    <div><span>Duration of usage</span><span><?= $duration ?></span></div>
  </div>
  <a class="btn" href="index.php">Login again</a>
</main>
</body>
</html>
