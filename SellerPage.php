<?php
session_start();
if (!isset($vFirstName) && basename($_SERVER['SCRIPT_NAME']) === 'sellerpage.php') {
    header('Location: /TTT_Pacman-1/seller_controller.php'); 
    exit;
}
// Safe defaults if someone opens this file directly (controller normally sets these)
$vImgSrc    = $vImgSrc    ?? '/TTT_Pacman-1/Images/ProfileIcon.png';
$vFirstName = $vFirstName ?? '';
$vAcad      = $vAcad      ?? '';
$vSchool    = $vSchool    ?? '';
$vMajor     = $vMajor     ?? '';
$vCityState = $vCityState ?? '';
$vEmail     = $vEmail     ?? '';
$vPay       = $vPay       ?? '';


include('header.php');
?>
<main>
  <div class="container">
    <div class="seller-page">

      <div class="top-actions">
        <button class="button" type="button" onclick="window.location.href='buyerpage.php'">Switch to Buyer</button>

  <form method="post" action="logout.php" style="display:inline;">
    <button class="button logout" type="submit">LogOut</button>
  </form>
</div> 
    <div class="profile-panel">
    <h2>Your Profile</h2>

  <!-- Use POST for file upload -->
  <form method="POST" enctype="multipart/form-data" action="Seller_Controller.php">
    <div class="avatar-uploader">
      <input id="avatarInput" name="avatar" type="file" accept="image/*" hidden>
      <label for="avatarInput" class="avatar" aria-label="Upload profile picture">
        <img id="avatarPreview" src="/TTT2CampusTrade/Images/ProfileIcon.png" alt="Profile picture">
        <span class="avatar-icon">+</span>
      </label>
      <small>Click to upload</small>
    </div>

    <label></label>
    <p>Name: <?= $vFirstName ?></p>
   <!-- <input type="text" name="name" placeholder="Name" value="<?= $vFirstName ?>">-->

    <label for="status"></label>
    <p>Status: <?= $vAcad ?></p>
    <!--
    <select id="status" name="status">
      <option <?= ($vAcad==='Student') ? 'selected' : '' ?>>Student</option>
      <option <?= ($vAcad==='Alumni')  ? 'selected' : '' ?>>Alumni</option>
    </select>-->

    <label></label>
    <p>School: <?= $vSchool ?></p>
   <!-- <input type="text" name="school" placeholder="School" value="<?= $vSchool ?>">-->

    <label></label>
    <p>Major: <?= $vMajor ?></p>
   <!-- <input type="text" name="major" placeholder="Major" value="<?= $vMajor ?>">-->

    <label id = "location" ></label>
    <p>Location: <?= $vCityState ?></p>
   <!-- <input type="text" name="location" placeholder="State/City" value="<?= $vCityState ?>">-->

    <label id= "email"></label>
    <p>Email: <?= $vEmail ?></p>
   <!-- <input type="email" name="email" placeholder="Email" value="<?= $vEmail ?>">-->

    <label id ="payment" for="payment"></label>
    <p>Preferred Payment: <?= $vEmail ?> </p>
    <!--
    <select id="payment" name="payment">
      <option <?= ($vPay==='Venmo')   ? 'selected' : '' ?>>Venmo</option>
      <option <?= ($vPay==='CashApp') ? 'selected' : '' ?>>CashApp</option>
      <option <?= ($vPay==='PayPal')  ? 'selected' : '' ?>>PayPal</option>
      <option <?= ($vPay==='Zelle')   ? 'selected' : '' ?>>Zelle</option>
    </select>-->

    <button class="button" type="submit" name="edit_profile" value="1">Edit</button>
  </form>
        <h3>Book Posted</h3>
        <select name="postedBook">
          <option>Select Book</option>
        </select>
        <form method="post" action="Seller_Controller.php">
        <button class="button delete" type="submit">Delete Book</button>
        </form>
    </div>


       

      <!-- RIGHT: Post a Book -->
      <div class="form-panel">
        <h2>Post a Book</h2>

        <form method="post" enctype="multipart/form-data" action="Seller_Controller.php">
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
            <button class="button" type="submit">Save</button>
            <button class="button" type="submit">Edit</button>
            <button class="button" type="submit">Post Book</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</main>

<?php include('footer.php'); ?>

