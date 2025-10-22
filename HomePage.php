<?php
include('header.php');
?>

<link rel="stylesheet" href="CSS/HomePage.css">

<!-- Section with Search -->
<div class="hero-section">
  <div class="hero-content">
    <h1 class="hero-title">CampusTrade</h1>
    <p class="hero-subtitle">Buy and sell directly with Minnesota State students</p>

    <div class="search-container">
      <span class="search-icon">🔍</span>
      <input type="text" placeholder="Search by title, author, ISBN, or course code...">
      <button class="search-btn">Search</button>
    </div>

    <div class="action-buttons">
      <button class="buy-sell-btn" onclick="window.location.href='buyer.php'">Buy</button>
      <button class="buy-sell-btn" onclick="window.location.href='seller.php'">Sell</button>
    </div>
  </div>
</div>

<!-- Main Content Section -->
<div class="content-section">
  <!-- Why Campus Trade -->
  <div class="info-box">
    <h2>Why Campus Trade?</h2>
    <p class="intro-text">A student-to-student marketplace built for the Minnesota State system.</p>

    <p>Textbooks are expensive, and buying new isn't always necessary. Campus Trade connects you with other MinnState students who are selling the exact books you need at prices that won't break the bank.</p>

    <div class="features-grid">
      <div class="feature-item">
        <h3>Save Money</h3>
        <p>Buy used textbooks at significantly reduced prices compared to campus bookstores.</p>
      </div>

      <div class="feature-item">
        <h3>Sell Fast</h3>
        <p>List your books quickly and connect with buyers in your campus community.</p>
      </div>

      <div class="feature-item">
        <h3>Stay Local</h3>
        <p>Meet on campus for safe, convenient exchanges. No shipping required.</p>
      </div>

      <div class="feature-item">
        <h3>Verified Students</h3>
        <p>Only MinnState students with verified email addresses can join.</p>
      </div>
    </div>

    <div class="cta-box">
      <p>Join students across Minnesota State colleges who are trading textbooks and saving money each semester.</p>
    </div>
  </div>

  <!-- Featured Books -->
  <div class="books-grid">
    <h3>Featured Books</h3>
    <p class="subtitle">Recently listed textbooks from students across MinnState campuses</p>
    <div class="book-items">
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
      <div class="book-item">
        <div class="book-spine"></div>
        <div class="book-placeholder"></div>
        <div class="bookmark"></div>
      </div>
    </div>
    <div class="browse-more">
      <button class="browse-btn" onclick="window.location.href='buyer.php'">Browse All Books</button>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>