<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CampusTrade CSS Test</title>
  <link rel="stylesheet" href="BasicSetUp.css">         <!-- Global styles -->
  <link rel="stylesheet" href="HeaderNavBar.css">       <!-- Header, nav, layout -->
  <link rel="stylesheet" href="ReusableComponents.css"> <!-- Buttons, cards, modals -->
</head>
<body>

  <!-- Header and Navigation -->
  <header>
    <div class="logo"> <img src="image/campusTradeLogo.png" alt="CampusTrade Logo" width="120">
  </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Sign Up</a>
      <a href="#">Login</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <!-- Main Container -->
<div class="signup-wrapper">
  <div class="logo-side">
    <img src="Image/CampusTradeLogo.png" alt="CampusTrade Logo">
  </div>

    <div class="signup-container">
  <h2>Create an account</h2>
  <form action="SignUp_Controller.php" method="POST">
  <label for="firstName">First Name</label>
  <input id="firstName" name="firstName" type="text" required>

  <label for="lastName">Last Name</label>
  <input id="lastName" name="lastName" type="text" required>

  <label for="email">Minnstate Email</label>
  <input id="email" name="email" type="email" placeholder="Startid@go.minnstate.edu" required>

  <label for="school">School Name</label>
  <input id="school" name="school" type="text" required>

  <label for="major">Major</label>
  <input id="major" name="major" type="text" required>

  <label for="role">Role</label>
  <select id="role" name="role" required>
    <option value="" disabled selected>Student or Alumni</option>
    <option value="student">Student</option>
    <option value="alumni">Alumni</option>
  </select>

  <label for="market">Marketplace Role</label>
  <select id="market" name="market" required>
    <option value="" disabled selected>Seller or Buyer</option>
    <option value="seller">Seller</option>
    <option value="buyer">Buyer</option>
  </select>

  <label for="password">Password</label>
  <input id="password" name="password" type="password" placeholder="6 characters minimum" required>

  <label for="confirmPassword">Confirm Password</label>
  <input id="confirmPassword" name="confirmPassword" type="password" required>

  <button type="submit" name="submit">Sign Up</button>
</form>
<div class="login-redirect">
  Already have an account? <a href="LoginPage.html">Log in here</a>
</div>

  
  <div class="note orange">Only For Minnstate schools.</div>
</div>

  

  <!-- Footer -->
  <footer>
    &copy; 2025 CampusTrade · All rights reserved
  </footer>

</body>
</html>