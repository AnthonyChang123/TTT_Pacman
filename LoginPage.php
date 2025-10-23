<?php
include('header.php');
?>

<main>
  <!-- One rectangle wrapper -->
  <div class="login-container">
    <h2 class="TitleLogin">Login to CampusTrade</h2>

    <form class="form_box" action="Login_Controller.php" method="POST">
      <label for="username">MinnState Email</label>
      <input id="username" name="email" type="email" placeholder="StartID@go.minnstate.edu" required>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="Enter your password" required>

      <button type="submit" class="button">Login</button>
    </form>

    <!-- ✅ These links are now inside the same rectangle -->
    <div class="login-links">
      <a href="ForgotPassword.php">Forgot Password?</a>
      <p>Don’t have an account? <a href="SignUpPage.php">Sign up here</a></p>
    </div>
  </div>
</main>

<?php
include('footer.php');
?>
