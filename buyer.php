<?php
    session_start();
    include("header.php");
?>

<!-- Main Container -->
<div class="signup-wrapper">
  <div class="logo-side">
    <img src="Images/CampusTradeLogo.png" alt="CampusTrade Logo">
  </div>

  <div class="signup-container">
    <h2>Register as Buyer</h2>

    <form action="Buyer_Controller.php" method="POST">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" required>

      <label for="email">Email</label>
      <input id="email" name="email" type="email" required>

      <label for="username">Username</label>
      <input id="username" name="username" type="text" required>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="6 characters minimum" required>

      <button type="submit" name="submit">Register</button>
    </form>

    <div class="login-redirect">
      Already have an account? <a href="login.php">Log in here</a>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
