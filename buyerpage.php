<?php
session_start();
include('header.php');
?>

<!-- CSS -->
<link rel="stylesheet" href="CSS/BasicSetUp.css">
<link rel="stylesheet" href="CSS/HeaderNavBar.css">
<link rel="stylesheet" href="CSS/ReusableComponents.css">
<link rel="stylesheet" href="CSS/HomePage.css">

<main>
  <div class="container">
    <div class="seller-page">

<!-- Top Buttons -->
<div class="top-actions" style="display:flex;justify-content:flex-end;gap:10px;margin-bottom:10px;">
  <button class="button" type="button" onclick="window.location.href='Seller_Controller.php'">Switch to Seller</button>
 
  <!-- ✅ Inline form for logout -->
  <form method="post" action="logout.php" style="display:inline;">
    <button class="button logout" type="submit">LogOut</button>
  </form>
</div>

<!-- Search bar  -->
<form class="search-toolbar" method="GET" action="buyerpage.php"
      style="display:flex;gap:12px;align-items:center;justify-content:flex-end;
             width:100%;max-width:600px;margin:0 auto 20px;">
  <div class="search-input"
       style="display:flex;align-items:center;gap:8px;border:2px solid #ffb98e;border-radius:8px;
              padding:5px 16px;background:#fff7ef;flex:1;">
    <span class="search-icon">🔍</span>
    <input type="text" name="q" placeholder="Search"
           style="border:0;background:transparent;outline:none;flex:1;">
  </div>

  <div class="dept-select" style="display:flex;gap:12px;align-items:center;">
    <select id="dept" name="dept">
      <option value="">Course Dept</option>
      <option>CS</option>
      <option>MATH</option>
      <option>BIO</option>
      <option>CHEM</option>
      <option>PHYS</option>
    </select>
    <button class="button" type="submit">Go</button>
  </div>
</form>



      <!-- Profile Panel  -->
      <div class="profile-panel">
        <h2>Your Profile</h2>

        <form method="post" enctype="multipart/form-data" action="#">
          <!-- Profile image upload -->
          <div class="avatar-uploader">
            <input id="avatarInput" name="avatar" type="file" accept="image/*" hidden>
            <label for="avatarInput" class="avatar" aria-label="Upload profile picture">
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

      </div>

      <!-- Book form  -->
      <div class="form-panel">

        <div class="books-grid" style="margin-top:8px;">
          <p class="subtitle">Recently listed textbooks from students across MinnState campuses</p>

          <div class="book-items">
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
            <div class="book-item"><div class="book-spine"></div><div class="book-placeholder"></div><div class="bookmark"></div></div>
          </div>

          <div class="browse-more">
            <button class="browse-btn" onclick="window.location.href='buyer.php'">Browse All Books</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php include('footer.php'); ?>
