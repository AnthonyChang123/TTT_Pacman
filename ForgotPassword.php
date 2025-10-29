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
        <h2 class="TitleLogin"> Forgot your password?</h2>

        <form class="form_box" action="" method="POST">
          <label for="username">Enter your email and we'll send you instructions to reset your password</label>
          <input id="username" name="email" type="email" placeholder="StartID@go.minnstate.edu" required>

          <button type="submit" class="button">Send</button>
        </form>

        <div class="login-links">
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
