<?php
session_start();
include('header.php');
require_once 'database.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // basic validation
    if ($name === '' || $email === '' || $username === '' || $password === '') {
        $errors[] = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Enter a valid email address.';
    }

    // check existing user
    if (!$errors) {
        $stmt = $pdo->prepare('SELECT id FROM buyers WHERE email = ? OR username = ?');
        $stmt->execute([$email, $username]);
        if ($stmt->fetch()) {
            $errors[] = 'Email or username already exists.';
        }
    }

    // insert user
    if (!$errors) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO buyers (name, email, username, password_hash) VALUES (?,?,?,?)');
        $stmt->execute([$name, $email, $username, $hash]);

        $_SESSION['buyer_id'] = $pdo->lastInsertId();
        header('Location: buyerpage.php');
        exit;
    }
}
?>

<!-- CSS Files -->
<link rel="stylesheet" href="CSS/BasicSetUp.css">
<link rel="stylesheet" href="CSS/HeaderNavBar.css">
<link rel="stylesheet" href="CSS/ReusableComponents.css">

<!-- Main Container -->
<div class="signup-wrapper" style="display:flex;justify-content:center;align-items:center;padding:40px;gap:40px;background-color:#002b36;">
  
  <!-- campus trade logo -->
  <div class="logo-side" style="flex:1;text-align:center;">
    <img src="Images/CampusTradeLogo.png" alt="CampusTrade Logo" style="max-width:300px;width:80%;border-radius:12px;">
    <p style="color:#fff;margin-top:10px;">Join CampusTrade as a Buyer</p>
  </div>

  <!-- form -->
  <div class="signup-container" style="background-color:#fff8ee;border:3px solid #ff7b32;border-radius:16px;padding:30px;flex:1;max-width:500px;">
    <h2 style="text-align:center;color:#ff7b32;">Register as Buyer</h2>

    <?php if ($errors): ?>
      <div style="background:#ffeaea;color:#b00020;padding:10px;border-radius:8px;margin-bottom:15px;">
        <ul style="margin:0 0 0 20px;">
          <?php foreach ($errors as $e): ?>
            <li><?= htmlspecialchars($e) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="POST" action="" style="display:flex;flex-direction:column;gap:12px;">
      <label for="name">Full Name</label>
      <input id="name" type="text" name="name" required>

      <label for="email">Email</label>
      <input id="email" type="email" name="email" required>

      <label for="username">Username</label>
      <input id="username" type="text" name="username" required>

      <label for="password">Password</label>
      <input id="password" type="password" name="password" placeholder="6 characters minimum" required>

      <button type="submit" class="button" style="background-color:#ff7b32;border:none;">Register</button>
      <a href="login.php" class="button" style="background-color:#002b36;color:#fff;text-align:center;text-decoration:none;">Back to Login</a>
    </form>

    <div class="note orange" style="margin-top:12px;text-align:center;">Buyers can browse listings and contact sellers.</div>
  </div>
</div>

<?php include('footer.php'); ?>
