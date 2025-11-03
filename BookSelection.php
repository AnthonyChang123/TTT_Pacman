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
        <button class="button" type="button" onclick="window.location.href='SellerPage.php'">Switch to Seller</button>

  <!-- ✅ Inline form for logout -->
  <form method="post" action="logout.php" style="display:inline;">
    <button class="button logout" type="submit">LogOut</button>
  </form>
</div>


      <!-- LEFT: Profile Panel -->
      <div class="profile-panel">
        <h2>Seller Profile</h2>

        <form>
          <!-- Profile image upload -->
          <div class="avatar-uploader">
            <input id="avatarInput" name="avatar" type="file" accept="image/*" hidden>
            <label for="avatarInput" class="avatar" aria-label="Upload profile picture">
              <!-- ✅ Corrected image path -->
              <img id="avatarPreview" src="Images/ProfileIcon.png" alt="Profile picture preview">
              <span class="avatar-icon">+</span>
            </label>
          </div>
            <div class="seller-info">
              <h3>Seller Information</h3>
              <p><strong>Name:</strong> Anthony Chang</p>
              <p><strong>Status:</strong> Student</p>
              <p><strong>School:</strong> Metropolitan State University</p>
              <p><strong>Major:</strong> Computer Information Technology</p>
              <p><strong>Location:</strong> Minneapolis, MN</p>
              <p><strong>Email:</strong> anthonychang@email.com</p>
              <p><strong>Preferred Payment:</strong> Venmo</p>
            </div>
        </form>
      </div>

      <!-- RIGHT: Book Details -->
      <div class="form-panel">

        <form method="post" enctype="multipart/form-data" action="Seller_Controller.php">
          <div class="book-upload">
            <input id="bookUpload" name="bookImage" type="file" accept="image/*" hidden>
            <label for="bookUpload" class="book-circle" aria-label="Upload book image">
              <span class="book-plus">+</span>
              <span class="book-hint">Image placeholder</span>
              <img id="bookPreview" alt="Book image preview" hidden>
            </label>
        </form>
      </div>
      <div>
        <h2>Book Details</h2>
        <p><strong>Title:</strong> The Great Gatsby</p>
        <p><strong>Author:</strong> F. Scott Fitzgerald</p>
        <p><strong>ISBN:</strong> 9780743273565</p>
        <p><strong>Price:</strong> $12.99</p>
        <div class="actions">
        <button class="button" type="" name="buy_item">Buy</button>
        </div>
      </div>

    </div>
  </div>
</main>

<?php include('footer.php'); ?>

