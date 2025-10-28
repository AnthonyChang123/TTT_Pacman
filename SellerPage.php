<?php
session_start();
include('header.php');
?>

<!-- Include CSS (if not already in header.php) -->
<link rel="stylesheet" href="CSS/BasicSetUp.css">
<link rel="stylesheet" href="CSS/HeaderNavBar.css">
<link rel="stylesheet" href="CSS/ReusableComponents.css">

<main>
  <div class="container">
    <div class="seller-page">

      <!-- Top Actions -->
      <div class="top-actions">
        <button class="button" type="button" onclick="window.location.href='buyerpage.php'">Switch to Buyer</button>
        <button class="button logout" type="button">Log Out</button>
      </div>

      <!-- LEFT: Profile Panel -->
      <div class="profile-panel">
        <h2>Your Profile</h2>

        <form method="post" enctype="multipart/form-data" action="#">
          <!-- Profile image upload -->
          <div class="avatar-uploader">
            <input id="avatarInput" name="avatar" type="file" accept="image/*" hidden>
            <label for="avatarInput" class="avatar" aria-label="Upload profile picture">
              <!-- ✅ Corrected image path -->
              <img id="avatarPreview" src="/TTT2CampusTrade/Images/ProfileIcon.png" alt="Profile picture preview">
              <span class="avatar-icon">+</span>
            </label>
            <small>Click to upload</small>
          </div>

          <input type="text" name="name" placeholder="Name">
          <select name="status">
            <option>Student</option>
            <option>Alumni</option>
          </select>
          <input type="text" name="school" placeholder="School">
          <input type="text" name="major" placeholder="Major">
          <input type="text" name="location" placeholder="State/City">
          <input type="email" name="email" placeholder="Email">
          <select name="payment">
            <option>Venmo</option>
            <option>CashApp</option>
            <option>PayPal</option>
            <option>Zelle</option>
          </select>

          <button class="button" type="button">Edit</button>
        </form>

        <h3>Book Posted</h3>
        <select name="postedBook">
          <option>Select Book</option>
        </select>
        <button class="button delete" type="button">Delete Book</button>
      </div>

      <!-- RIGHT: Post a Book -->
      <div class="form-panel">
        <h2>Post a Book</h2>

        <form method="post" enctype="multipart/form-data" action="#">
          <div class="book-upload">
            <input id="bookUpload" name="bookImage" type="file" accept="image/*" hidden>
            <label for="bookUpload" class="book-circle" aria-label="Upload book image">
              <span class="book-plus">+</span>
              <span class="book-hint">Book Image</span>
              <img id="bookPreview" alt="Book image preview" hidden>
            </label>
          </div>

          <input type="text" name="titleAuthor" placeholder="Book Title / Author">
          <input type="text" name="isbn" placeholder="ISBN">
          <input type="number" step="0.01" name="price" placeholder="Price">
          <select name="condition">
            <option>New</option>
            <option>Used</option>
          </select>
          <input type="text" name="courseDept" placeholder="Course Dept.">
          <input type="email" name="contact" placeholder="Contact Info">

          <div class="button-group">
            <button class="button" type="button">Save</button>
            <button class="button" type="button">Edit</button>
            <button class="button" type="button">Post Book</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</main>

<?php include('footer.php'); ?>

