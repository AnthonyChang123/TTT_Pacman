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
        <button class="button logout">Log Out</button>
      </div>

      <!-- LEFT: Book details -->
      <div class="buy-left">
        <h1 class="hero-title">Book Details</h1>
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
        <p><strong>Seller Name:</strong> Jane Smith</p>
        <p><strong>Contact:</strong>
          <a href="mailto:janesmith@campustrade.com?subject=Interested%20in%20your%20book&body=Hi%20Jane,%0AI'd%20like%20to%20buy%20your%20book%20for%20CS101.%20Can%20we%20connect%20via%20Venmo?">
            janesmith@campustrade.com
          </a>
        </p>
        <p><strong>Preferred Payment:</strong> Venmo</p>

        <div class="note">
          💬 Please contact the seller directly to discuss how payment will be made and how you’ll receive the book.
        </div>
      </div>

      <!-- RIGHT: Poster image -->
      <div class="buy-graphic">
        <img src="Images/TTTBuyButton.png" alt="Thank You Poster" class="thankyou-image">
      </div>
    </div>
  </section>
</main>

<?php include('footer.php'); ?>

