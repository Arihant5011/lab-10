<?php
$name = trim($_POST['name'] ?? '');
$age  = $_POST['age'] ?? '';

// Basic server-side validation
if ($name === '' || !is_numeric($age) || $age < 1) {
    header("Location: index.html");
    exit;
}

$name = htmlspecialchars($name);
$age  = (int)$age;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $age < 18 ? 'Access denied' : 'Welcome' ?></title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<main class="card">
<?php if ($age < 18): ?>
  <p class="msg-err">Hello, <?= $name ?>, you are not authorized to visit the site</p>
<?php else: ?>
  <p class="msg-ok">Welcome to this site</p>
<?php endif; ?>
  <a class="btn" href="index.html">Back</a>
</main>
</body>
</html>
