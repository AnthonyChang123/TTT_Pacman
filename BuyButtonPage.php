<?php
session_start();
include('header.php');
?>

<main>
  <section class="content-section">
    <div class="buy-box">

      <!-- top-right buttons INSIDE the card -->
      <div class="top-actions-inside">
        <a href="SellerPage.php" class="button switch">Switch to Seller</a>

        <!-- Inline form for logout -->
        <form method="post" action="logout.php" style="display:inline;">
          <button class="button logout" type="submit">LogOut</button>
        </form>
      </div>

      <!-- LEFT: Book details -->
      <div class="buy-left">
        <h1>Book Details</h1>
        <form method="post" enctype="multipart/form-data" action="Seller_Controller.php">
          <div class="book-upload">
            <input id="bookUpload" name="bookImage" type="file" accept="image/*" hidden>
            <label for="bookUpload" class="book-circle" aria-label="Upload book image">
              <span class="book-plus">+</span>
              <span class="book-hint">Book Image</span>
              <img id="bookPreview" alt="Book image preview" hidden>
            </label>
          </div>
        </form>

        <p><strong>Title:</strong> Intro to Java</p>
        <p><strong>Author:</strong> John Doe</p>
        <p><strong>Price:</strong> $25</p>
        <p><strong>Course:</strong> CS101</p>
        <p><strong>Condition:</strong> Used</p>
        <p><strong>ISBN:</strong> 978-1234567890</p>
      </div>

      <!-- MIDDLE: Seller info -->
      <div class="buy-right">
        <h2>Seller Information</h2>

        <div class="avatar-uploader">
          <input id="avatarInput" name="avatar" type="file" accept="image/*" hidden>
          <label for="avatarInput" class="avatar" aria-label="Upload profile picture">
            <img id="avatarPreview" src="/TTT2CampusTrade/Images/ProfileIcon.png" alt="Profile picture preview">
            <span class="avatar-icon">+</span>
          </label>
        </div>

        <p><strong>Name:</strong> Anthony Chang</p>
        <p><strong>Status:</strong> Student</p>
        <p><strong>School:</strong> Metropolitan State University</p>
        <p><strong>Major:</strong> Computer Information Technology</p>
        <p><strong>Location:</strong> Minneapolis, MN</p>
        <p><strong>Email:</strong>
          <a href="mailto:anthonychang@email.com?subject=Interested%20in%20your%20book">
            anthonychang@email.com
          </a>
        </p>
        <p><strong>Preferred Payment:</strong> Venmo</p>
      </div>

      <!-- RIGHT: Poster image -->
      <div class="buy-graphic">
        <img src="Images/TTTBuyButton.png" alt="Thank You Poster" class="thankyou-image">
      </div>

      <!-- NOTE + MESSAGE BUTTON: full-width row under all columns -->
      <div class="buy-note">
        <div class="note">
          💬 Please contact the seller directly to discuss how payment will be made and how you’ll receive the book.
        </div>

        <!-- Message Button (mailto) -->
        <a class="message-button" href="mailto:anthonychang@email.com?subject=Interested%20in%20your%20book">
          Message Seller
        </a>
      </div>

    </div>
  </section>
</main>

<?php include('footer.php'); ?>
