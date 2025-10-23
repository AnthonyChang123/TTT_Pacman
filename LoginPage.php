<?php
include('header.php');
?>

<main>
  <div class="login-wrapper">
    <div class="login-box">

      <!-- Left side: Logo / Image -->
      <div class="login-logo-side">
        <img src="Images/CampusTradeLogo.png" alt="CampusTrade Logo">
      </div>

      <!-- Right side: Login form -->
      <div class="login-form-side">
        <h2 class="TitleLogin">Login to CampusTrade</h2>

        <form class="form_box" action="Login_Controller.php" method="POST">
          <label for="username">MinnState Email</label>
          <input id="username" name="email" type="email" placeholder="StartID@go.minnstate.edu" required>

          <label for="password">Password</label>
          <input id="password" name="password" type="password" placeholder="Enter your password" required>

          <button type="submit" class="button">Login</button>
        </form>

        <div class="login-links">
          <a href="ForgotPassword.php">Forgot Password?</a>
          <p>Don’t have an account? <a href="SignUpPage.php">Sign up here</a></p>
        </div>

        <div class="note orange">Only for MinnState schools.</div>
      </div>

    </div>
  </div>
</main>

<?php
include('footer.php');
?>

