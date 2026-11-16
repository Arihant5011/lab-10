<?php
date_default_timezone_set('Asia/Kolkata');   // change to your timezone if needed
$date = date('d F Y');       // e.g. 16 November 2026
$time = date('h:i:s A');     // e.g. 03:45:12 PM
$day  = date('l');           // e.g. Monday
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="1">
<title>Current Date, Time and Day</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<main class="card">
  <h1>Current Date &amp; Time</h1>
  <p class="big"><?= $time ?></p>
  <div class="rows">
    <div><span>Date</span><span><?= $date ?></span></div>
    <div><span>Day</span><span><?= $day ?></span></div>
    <div><span>Time</span><span><?= $time ?></span></div>
  </div>
  <p style="margin:0;font-size:.85rem">Page refreshes every second.</p>
</main>
</body>
</html>
