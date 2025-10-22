<?php
include('header.php');
require_once 'config.php'; // create this to connect to your DB (shown below)
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // simple validation
    if ($name === '' || $email === '' || $username === '' || $password === '') {
        $errors[] = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Enter a valid email address.';
    }

    // if no errors so far, check if user exists
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

<link rel="stylesheet" href="http://localhost/TTT_Pacman/CSS/LoginForm.css">

<div class="form_box" style="max-width:500px;margin:auto;">
    <h2 class="TitleLogin">Register as Buyer</h2>

    <?php if ($errors): ?>
        <div style="color:red;">
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?= htmlspecialchars($e) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" class="button">Register</button>
        <a href="login.php" class="button">Back to Login</a>
    </form>
</div>

<?php
include('footer.php');
?>
